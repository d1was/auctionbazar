<?php
namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use Carbon\Carbon;
use App\Listing;
use App\Bid;
use App\Notifications\WonTheBid;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function(){


            $listings = Listing::where('deadline', '<', Carbon::now()->setTimeZone('Asia/Kathmandu'))->where('is_active',true)->get();
            foreach($listings as $listing)
            {
                $listing->is_active = false;
                $listing->save();
                echo "hello";
                
                // Change the status to winner
                $bid = Bid::where('listing_id', $listing->id);
                $max_bid_amount = $bid->max('amount');
                $winning_bid = $bid->where('amount', $max_bid_amount);
                if(sizeof($winning_bid->get())){
                    $winning_bid->update(['is_winner' => true]);                
                    // notify the bid winner
                    $winner = $winning_bid->first()->user;
                    $winner->notify(new WonTheBid($winning_bid->first()));
                }
            }

    
         })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
