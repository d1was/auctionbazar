<?php

use Illuminate\Database\Seeder;
use App\Listing;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $listings_json = '  [       {
            "category_id" : "16",
            
            "title" : "Gaming Phone On 15000 ",
            "price": "15000",
            "deadline" : "2019-08-10 10:15:00",
            "min_bid_interval" : "400",
            "description" : "New phone lina lako tesaile ho sell garna lako Mbl ekdam naya like new phone eauta scratch nivakoxaina 64 gb ko gaming ko lagi best hunxa 4000 mah ko long lasting btrry live dekhna sakinxainterested call on 9818561026,9865460909",
            "photo_main" : "https://cdn.hamrobazaar.com/1858914_0730afha4224467g_large.jpg",
            "photo_1": "https://cdn.hamrobazaar.com/1858914_0730fh6356b9635b_large.jpg",
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Zenfone Max",
            "quantity" : "1",
            "location": "Gwarko Lalitpur"
        },
        {
            "category_id" : "6",
            
            "title" : "Urgent Sale Cross X",
            "price": "460000",
            "deadline" : "2019-08-07 10:15:00",
            "min_bid_interval" : "1000",
            "description" : "Before i put a price for 485k. Want to sale urgently so now the price is just 460k. Hurry up guysthe bike is really new just have to change the rear tyre. Single hand ho and stunts never performed. ",
            "photo_main" : "https://cdn.hamrobazaar.com/1857013_072834g47geha53c_large.jpg",
            "photo_1": "https://cdn.hamrobazaar.com/1857013_072863agd759fd8f_large.jpg",
            "condition" : "Like New ",
            "dispatch" : "4",
            "brand" : "Cross X",
            "quantity" : "1",
            "location": "Palamse Bhaktapur"
        },
        {
            "category_id" : "6",
            "title" : "Bike In Good Condition (bajaj 220).",
            "price": "185000",
            "deadline" : "2019-08-12 10:15:00",
            "min_bid_interval" : "1000",
            "description" : "Bike is in good condition, interested can call directly. ",
            "photo_main" : "https://cdn.hamrobazaar.com/1858422_0729367eba42722a_large.jpg",
            "photo_1": "https://cdn.hamrobazaar.com/1858422_0729g35bfhg3dh3h_large.jpg",
            "condition" : "Good/Fair",
            "dispatch" : "3",
            "brand" : "Hero Splendar",
            "quantity" : "1",
            "location": "Kapan Kathmandu"
        }
        ,{
            "category_id" : "16",
            "title" : "Samsung Galaxy Note 3",
            "price": "8000",
            
            "deadline" : "2019-08-12 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Serious buyer please contact me on given number 9861901849 ",
            "photo_main" : "https://cdn.hamrobazaar.com/1864641_0803bf3ha9d1fe5a_large.jpg",
            "photo_1": "",
            "condition" : "Good/Fair",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Kupondol Lalitpur"
        }
        ,{
            "category_id" : "13",
            
            "title" : "Nikon Lens 18-70mm F/3.5-4.5g If-ed Af-s Dx Zoom Nikkor",
            "price": "42000",
            "deadline" : "2019-08-12 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "- Good Condition - Nikon 18-70mm f3.5-4.5g- Exclusive Silent Wave Motor for high-speeauto-focusiwith accuracy and super-quiet operation- Optimized DX lens design is compatible with every Nikon D-Series digital SLR cameras- Compact 3.8X zoom covers portrait to wide view (76 at 18mm to 22 50 at 70mm)- Three Nikon ED glass elements, plus aspheric element for low distortion and minimized chromatic aberration- Compact 3.8X zoom covers portrait to wide view (76 at 18mm to 22 50 at 70mm)- Optimized DX lens design is compatible with every Nikon D-Series digital SLR cameras- Three Nikon ED glass elements, plus aspheric element for low distortion and minimized chromatic aberration- Exclusive Silent Wave Motor for high-speed auto-focusing with accuracy and super-quiet operation ",
            "photo_main" : "https://cdn.hamrobazaar.com/1864949_0803cd4c94372b1f_large.jpg",
            "photo_1": "https://cdn.hamrobazaar.com/1864949_0803941b7d4f86d9_large.jpg",
            "photo_2":"https://cdn.hamrobazaar.com/1864949_08031eeg6eca36hh_large.jpg",
            "condition" : "Good/Fair",
            "dispatch" : "2",
            "brand" : "Nikon",
            "quantity" : "1",
            "location": "Lazimpat Kathmandu"
        }
,
{
            "category_id" : "2",
            
            "title" : "Yasuda 32 Tv ",
            "price": "12000",
            "deadline" : "2019-08-02 10:15:00",
            "min_bid_interval" : "400",
            "description" : "yasuda 32 tv for urgent sale.it has no problem at all"
,
            "photo_main" : "https://cdn.hamrobazaar.com/1864050_0802f564364bgfaf_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Yasuda",
            "quantity" : "1",
            "location": "Satdobato Lalitpur"
        },
        {
        "category_id" : "2",
            "title" : "Hisense TV ",
            "price": "9000",
            "deadline" : "2019-09-05 10:15:00",
            "min_bid_interval" : "300",
            "description" : "Condition ek dam ramro xa dherai chalako xaina"
,
            "photo_main" : "https://cdn.hamrobazaar.com/1830769_0707bhb562f6edda_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Hisense",
            "quantity" : "1",
            "location": "Pharping Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Sony Smart Tv",
            "price": "35000",
            "deadline" : "2019-08-20 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Tv is in Brand new condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1867813_0805ah3g1fg36319_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Sony",
            "quantity" : "1",
            "location": "Kalimati Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Philips LCD",
            "price": "10000",
            "deadline" : "2019-09-10 10:15:00",
            "min_bid_interval" : 300,
            "description" : "Screen Futeko Philips Tv",

            "photo_main" : "https://cdn.hamrobazaar.com/1837235_071246fa1be26ebg_large.jpg",
            
            "condition" : "Fair",
            "dispatch" : "1",
            "brand" : "Philips",
            "quantity" : 1,
            "location": "Satdobato Lalitpur"
        },
        {
            "category_id" : "2",
            

            "title" : "Samsung Hd TV",
            "price": "82000",
            "deadline" : "2019-09-20 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Brand new Samsung TV",

            "photo_main" : "https://cdn.hamrobazaar.com/1835542_07108cfhgeg69gb5_small.jpg",
            
            "condition" : "New",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Koteswr Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Sony Bravia TV",
            "price": "65000",
            "deadline" : "2019-09-29 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Brand new Sony TV",

            "photo_main" : "https://cdn.hamrobazaar.com/1869217_0806dad6e1b6b3ag_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Sony Bravia",
            "quantity" : "1",
            "location": "Baneswor Kathmandu"
        },
        {
            "category_id" : "2",
            
            "title" : "Philips HD",
            "price": "17500",
            "deadline" : "2019-09-09 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Brand new Philiphs TV,not used.",

            "photo_main" : "https://cdn.hamrobazaar.com/1869615_080736d45bgcaaa1_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Philips",
            "quantity" : "1",
            "location": "Pharping Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Swiss Watch",
            "price": "20000",
            "deadline" : "2019-09-20 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Like new watch,Swiss.",

            "photo_main" : "https://cdn.hamrobazaar.com/1865899_0804g3d6e16c23g1_large.jpg",
            
            "condition" : "Fresh condition",
            "dispatch" : "3",
            "brand" : "SWISS",
            "quantity" : "1",
            "location": "Thimi Bhaktapur"
        },
        {
            "category_id" : "2",
            

            "title" : "Bernhardt H Mayer Naticus Royale Watch",
            "price": "200000",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 2000,  
            "description" : "The vigorous and the sensual are taken to higher tides with the new generation of Bernhard H. Mayer®Nauticus Royale III, an elegant timepiece in the form of technical refinement and Swiss automatic movement. With its two-tone stainless steel case and bracelet, this watch boasts of a newly designed crown protection and dial, perfect for those who like taking calculated risks and jumping in at the deep end with its 500 metre water resistance.",

            "photo_main" : "https://cdn.hamrobazaar.com/1856303_0728g2243633gc94_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Bernhard H. Mayer",
            "quantity" : "1",
            "location": "Baneswor Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Original Swiss Watch",
            "price": "25000",
            "deadline" : "2019-09-29 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Original Swiss Watch",

            "photo_main" : "https://cdn.hamrobazaar.com/1865907_0804872c46d99h4h_large.jpg",
            
            "condition" : "Like New",
            "dispatch" : "3",
            "brand" : "Swiss",
            "quantity" : "1",
            "location": "Tokha Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Sowan Prima Swiss Watch",
            "price": "6500",
            "deadline" : "2019-09-12 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Original Swiss Prima Watch",

            "photo_main" : "https://cdn.hamrobazaar.com/1860543_0731bd294cbg3f5d_large.jpg",
            
            "condition" : "Good/Fair",
            "dispatch" : "3",
            "brand" : "Swiss",
            "quantity" : "1",
            "location": "Tinkune Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Apple IWatch Series 2",
            "price": "27000",
            "deadline" : "2019-09-05 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Apple Iwatch is in great condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1871765_08095agf135a51e9_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Apple",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Apple IWatch Series 4 Nike Edition",
            "price": "60000",
            "deadline" : "2019-09-29 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Apple iwatch series 44mm silver color Nike edition Brand new not used comes with all the accessories and extra black sport loop band and 2 iwatch case.",

            "photo_main" : "https://cdn.hamrobazaar.com/1802063_0613ffa71d3138bb_large.jpg",
            
            "condition" : "New",
            "dispatch" : "3",
            "brand" : "Apple",
            "quantity" : "1",
            "location": "Thimi Bhaktapur"
        },
        {
            "category_id" : "2",
            

            "title" : "Genuine Apple Watch Series 1",
            "price": "22000",
            "deadline" : "2019-09-26 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Aluminum Case with Navy Blue Sport Band Apple Watch",

            "photo_main" : "https://cdn.hamrobazaar.com/1764496_0513dh74fgf32bd4_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Apple",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Apple IWatch Series 4",
            "price": "17000",
            "deadline" : "2019-09-28 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Brand new Apple IWatch Series 4 Smart Watch",

            "photo_main" : "https://cdn.hamrobazaar.com/1793735_0606e856748d147c_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Brand New",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Samsung Smart Watch",
            "price": "8000",
            "deadline" : "2019-09-23 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Samsung Smart Watch brand new.",

            "photo_main" : "https://cdn.hamrobazaar.com/1835766_0711hc5aabga6hea_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Xiaomi MI Smart Watch",
            "price": "3999",
            "deadline" : "2019-09-28 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Brand New Xiaomi Smart Watch",

            "photo_main" : "https://cdn.hamrobazaar.com/1844216_0718fb28264b8hh3_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "1",
            "brand" : "Xiaomi",
            "quantity" : "1",
            "location": "Bhaktapur"
        },
        {
            "category_id" : "2",
            

            "title" : "Pulsar 150",
            "price": "75000",
            "deadline" : "2019-09-30 10:15:00",
            "min_bid_interval" : 2000,
            "description" : "Good condition pulsar bike.",

            "photo_main" : "https://cdn.hamrobazaar.com/1823803_0701d98a32dd46b6_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Bajaj",
            "quantity" : "1",
            "location": "Balkot,Bhaktapur"
        },
        {
            "category_id" : "2",
            

            "title" : "Honda Shine Bike",
            "price": "75000",
            "deadline" : "2019-09-05 10:15:00",
            "min_bid_interval" : 2000,
            "description" : "Well maintained honda shine bike.",

            "photo_main" : "https://cdn.hamrobazaar.com/1860484_0731931f95c23h34_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Honda",
            "quantity" : "1",
            "location": "Bhaktapur"
        },
        {
            "category_id" : "2",
            

            "title" : "RC 390 cc Sale",
            "price": "335000",
            "deadline" : "2019-09-28 10:15:00",
            "min_bid_interval" : 5000,
            "description" : "Fresh RC bike in good condition on sale",

            "photo_main" : "https://cdn.hamrobazaar.com/1814067_0623b4f4813dca84_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "KTM RC",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Urgently selling Dominar 400",
            "price": "365000",
            "deadline" : "2019-09-27 10:15:00",
            "min_bid_interval" : 5000,
            "description" : "Fresh condition pulsar dominar bike.",

            "photo_main" : "https://cdn.hamrobazaar.com/1865568_080413ce6d1fhc3e_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Bajaj",
            "quantity" : "1",
            "location": "Bhaktapur"
        },
        {
            "category_id" : "2",
            

            "title" : "Apache On Sell",
            "price": "85000",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 2000,
            "description" : "Great condition Apache bike.",

            "photo_main" : "https://cdn.hamrobazaar.com/1872745_08099eh89e6a2h4h_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Apache",
            "quantity" : "1",
            "location": "Balkhu Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Vespa Sxl 150",
            "price": "200000",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 5000,
            "description" : "Vespa scooty in good condition on sell,fresh condition,no scratch.",

            "photo_main" : "https://cdn.hamrobazaar.com/1854415_0726b9d61a19a763_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Vespa",
            "quantity" : "1",
            "location": "Gwarko Lalitpur"
        },
        {
            "category_id" : "2",
            

            "title" : "Aprilla Sr 150",
            "price": "230000",
            "deadline" : "2019-09-28 10:15:00",
            "min_bid_interval" : 5000,
            "description" : "Aprilia scoty in fresh condition on sale.",

            "photo_main" : "https://cdn.hamrobazaar.com/1853811_0725da75h26427e5_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Aprilia",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "71 Lot Honda Dio On Sale",
            "price": "115000",
            "deadline" : "2019-09-26 10:15:00",
            "min_bid_interval" : 3000,
            "description" : "Honda scooty single handed used in fresh condition on sale.",

            "photo_main" : "https://cdn.hamrobazaar.com/1831489_0707he336hba37hh_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Honda",
            "quantity" : "1",
            "location": "Boudha Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Thanka Painting For Sale Vajrakaliya Yab Yum",
            "price": "7000",
            "deadline" : "2019-09-28 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Vajrakaliya thanka painting for sale.",

            "photo_main" : "https://cdn.hamrobazaar.com/1866366_08047h82d1gg62g1_large.jpg",
            
            "condition" : "Brand new",
            "dispatch" : "3",
            "brand" : "Thanka",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Thanka Painting For Sale Kundalini Seven Chakra",
            "price": "3500",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Thanka painting wall hanging.",

            "photo_main" : "https://cdn.hamrobazaar.com/1862426_080137dghd3e3538_large.jpg",
            
            "condition" : "Brand New",
            "dispatch" : "3",
            "brand" : "Thanka",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Padmashambava Thanka Painting Original",
            "price": "4500",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Original thanka painting.",

            "photo_main" : "https://cdn.hamrobazaar.com/1840749_07218g22f78126fc_large.jpg",
            
            "condition" : "Brand new",
            "dispatch" : "3",
            "brand" : "Thanka",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "S7 Edge",
            "price": "18000",
            "deadline" : "2019-10-25 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Phone is in good condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1847648_0721fggb297h4c37_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Redmi Note 7 on Sale",
            "price": "16000",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Phone is in brand new condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1868640_0806aggb6hebb6g9_large.jpg",
            
            "condition" : "Like new",
            "dispatch" : "3",
            "brand" : "MI",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Mi Note 5 On Sale",
            "price": "11500",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Phone is in fresh condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1856676_0728e895bh882132_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "MI",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Samsung Galaxy Note 8",
            "price": "43000",
            "deadline" : "2019-09-28 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Rare Limited Edition Samsung Note in fresh condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1867709_08052h7f46d8bf1e_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Iphone 8 plus",
            "price": "75000",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "New gold iphone 8 plus in fresh condition on sale.",

            "photo_main" : "https://cdn.hamrobazaar.com/1855727_07273dg547h26cbe_large.jpg",
            
            "condition" : "New",
            "dispatch" : "3",
            "brand" : "Iphone",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Iphone 7 Plus",
            "price": "43500",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Fresh phone with good battery life,Iphone 7plus,no scratch.",

            "photo_main" : "https://cdn.hamrobazaar.com/1867901_0806dgacgg8bc7ea_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Iphone",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Samsung Galaxy S9",
            "price": "35000",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Phone in good condition,samsung S9 with no problem.",

            "photo_main" : "https://cdn.hamrobazaar.com/1846092_071967fah6c99ccg_large.jpg",
            
            "condition" : "Fresh",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Iphone X 256GB",
            "price": "85000",
            "deadline" : "2019-09-29 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Iphone with good battery life in fresh condition in cheap price.",

            "photo_main" : "https://cdn.hamrobazaar.com/1850746_0723233bhc56b525_large.jpg",
            
            "condition" : "Like new",
            "dispatch" : "3",
            "brand" : "Iphone",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Samsung S8 Plus",
            "price": "34000",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Fresh condition phone in good condition and without scratch.",

            "photo_main" : "https://cdn.hamrobazaar.com/1857418_0728ffg9d4c6h6b7_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Samsung",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Redimi Note 7 Pro On Sale",
            "price": "25000",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 500,
            "description" : "Phone is in good condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1865447_080496ff8cccc566_large.jpg",
            
            "condition" : "Like new",
            "dispatch" : "3",
            "brand" : "Redmi",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "I7 Hp Laptop",
            "price": "45000",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Good condition laptop.",

            "photo_main" : "https://cdn.hamrobazaar.com/1848854_07221636hcc136ad_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "2",
            "brand" : "HP",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "MacBook Pro 13inch",
            "price": "40000",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 500,
            "description" : "MacBook Pro is in good runnable condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1801097_0612g57964gbabcf_large.jpg",
            
            "condition" : "Fair",
            "dispatch" : "3",
            "brand" : "Apple",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "MacBook Pro 13 inch",
            "price": "95000",
            "deadline" : "2019-10-05 10:15:00",
            "min_bid_interval" : 2000,
            "description" : "MacBook is very fresh without scratch.",

            "photo_main" : "https://cdn.hamrobazaar.com/1866509_080422dh39egh948_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Apple",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "New HP I5 6th Generation Laptop",
            "price": "38000",
            "deadline" : "2019-09-29 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Hp Laptop is totally like new with no scratch.",

            "photo_main" : "https://cdn.hamrobazaar.com/1857180_07283g486ae53868_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "HP",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Dell Inspiron",
            "price": "30000",
            "deadline" : "2019-09-25 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Dell laptop is in good condition.",

            "photo_main" : "https://cdn.hamrobazaar.com/1862809_080161g1g7542526_large.jpg",
            
            "condition" : "Good",
            "dispatch" : "3",
            "brand" : "Dell",
            "quantity" : "1",
            "location": "Kathmandu"
        },
        {
            "category_id" : "2",
            

            "title" : "Dell Laptop Inspiron N5050",
            "price": "24500",
            "deadline" : "2019-10-25 10:15:00",
            "min_bid_interval" : 1000,
            "description" : "Dell laptop dont have any scratch with good battery backup.",

            "photo_main" : "https://cdn.hamrobazaar.com/1845038_07196751h5b6671d_large.jpg",
            
            "condition" : "Excellent",
            "dispatch" : "3",
            "brand" : "Dell",
            "quantity" : "1",
            "location": "Kathmandu"
        }
    ]';


    $php_listing = json_decode($listings_json, true);
    $userid = [4,5,6,7,8,9,10];
    foreach($php_listing as $listing)
    {
    	Listing::create([
    		'user_id'  => $userid[array_rand($userid)],
    		'category_id' => $listing['category_id'],
    		'title' => $listing['title'],
    		'initial_price' => $listing['price'],
    		'deadline' => $listing['deadline'],
    		'min_bid_interval' => $listing['min_bid_interval'],
    		'description' => $listing['description'],
			'photo_main' => $listing['photo_main'],
			'condition' => $listing['condition'],
			'dispatch' => $listing['dispatch'],
			'brand' => $listing['brand'],
			'quantity' => $listing['quantity'],
			'location' => $listing['location'],    		
    	]);
    	$userid++;
    }


    }
}
