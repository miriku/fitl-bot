<?php
  // the immutable map states
  class map
  {
    public $place = array();

    function __construct()
    {
      // cities
      // constructor is "name, isCoastal, pop"
      $place['Hue'] = new city('Hue', "coastal", 2);
      $place['Da Nang'] = new city("Da Nang", "coastal", 1);
      $place['Kontum'] = new city("Kontum", "inland", 1);
      $place['Qui Nhon'] = new city("Qui Nhon", "coastal", 1);
      $place['Cam Rahn'] = new city("Cam Rahn", "coastal", 1);
      $place['An Loc'] = new city("An Loc", "inland", 1);
      $place['Can Tho'] = new city("Can Tho", "inland", 1);
      $place['Saigon'] = new city("Saigon", "coastal", 6);

      // LoCs
      // constructor is "name, isCoastal, type, econ"
      $place['Mekong - Chau Doc to Can Tho'] = new LoC("Mekong - Chau Doc to Can Tho", "inland", "river", 1);
      $place['Mekong - Can Tho to Long Phu'] = new LoC('Mekong - Can Tho to Long Phu', "inland", "river", 1);
      $place['Mekong - Can Tho to Saigon'] = new LoC('Mekong - Can Tho to Saigon', "inland", "river", 2);
      $place['Route 4 - Ba Xuyen to Can Tho'] = new LoC('Route 4 - Ba Xuyen to Can Tho', "inland","highway", 0);
      $place['Route 4 - Can Tho to Saigon'] = new LoC('Route 4 - Can Tho to Saigon', "inland","highway", 2);
      $place['Route 1 - Saigon to Cam Rahn'] = new LoC('Route 1 - Saigon to Cam Rahn', "coastal","highway",1);
      $place['Route 13 - Route 14'] = new LoC('Route 13 - Route 14', "inland","highway",1);
      $place['Route 20'] = new LoC('Route 20', "inland","highway",1);
      $place['Route 11'] = new LoC('Route 11', "inland","highway",1);
      $place['Route 21'] = new LoC('Route 21', "inland","highway",0);
      $place['Route 14 - Ban Me Thuot to Kontum'] = new LoC('Route 14 - Ban Me Thuot to Kontum', "inland","highway",1);
      $place['Route 1 - Cam Rahn to Qui Nhon'] = new LoC('Route 1 - Cam Rahn to Qui Nhon', "coastal","highway",1);
      $place['Route 19'] = new LoC('Route 19', "inland","highway",1);
      $place['Route 14 - Kontum to Dak To'] = new LoC('Route 14 - Kontum to Dak To', "inland","highway",1);
      $place['Route 1 - Qui Nhon to Da Nang'] = new LoC('Route 1 - Qui Nhon to Da Nang', "coastal","highway",1);
      $place['Route 14 - Dak To to Da Nang'] = new LoC('Route 14 - Dak To to Da Nang', "inland","highway",0);
      $place['Route 1 - Route 9'] = new LoC('Route 1 - Route 9', "coastal","highway",1);

      // provinces
      // constructor is "name, isCoastal, country, pop"
      $place['Kien Giang - An Xuyen'] = new province('Kien Giang - An Xuyen', "coastal", "south", "lowland", 2);
      $place['Ba Xuyen'] = new province('Ba Xuyen', 'coastal', 'south', "lowland", 1);
      $place['Kien Phong'] = new province('Kien Phong', 'inland', 'south', "lowland", 2);
      $place['Kien Hoa - Vinh Binh'] = new province('Kien Hoa - Vinh Binh', 'coastal', 'south', "lowland", 2);
      $place['Sihanoukville'] = new province('Sihanoukville', 'coastal', 'cambodia', "jungle", 0);
      $place['The Parrot\'s Beak'] = new province('The Parrot\'s Beak', 'inland', 'cambodia', "jungle", 0);
      $place['Tay Ninh'] = new province('Tay Ninh', 'inland', 'south', "jungle", 2);
      $place['Phuoc Long'] = new province('Phuoc Long', 'inland', 'south', "jungle", 0);
      $place['Quang Duc - Long Khahn'] = new province('Quang Duc - Long Khahn', 'inland', 'south', "jungle", 0);
      $place['Binh Tuy - Binh Thuan'] = new province('Binh Tuy - Binh Thuan', 'coastal', 'south', "jungle", 1);
      $place['The Fishhook'] = new province('The Fishhook', 'inland', 'cambodia', "jungle", 0);
      $place['Pleiku - Darlac'] = new province('Pleiku - Darlac', 'inland', 'south', "highland", 1);
      $place['Khanh Hoa'] = new province('Khanh Hoa', 'coastal', 'south', "highland", 1);
      $place['Northeast Cambodia'] = new province('Northeast Cambodia', 'inland', 'cambodia', "jungle", 0);
      $place['Phu Bon - Phu Yen'] = new province('Phu Bon - Phu Yen', 'coastal', 'south', "lowland", 1);
      $place['Binh Dinh'] = new province('Binh Dinh', 'coastal', 'south', 'highland', 2);
      $place['Southern Laos'] = new province('Southern Laos', 'inland', 'laos', 'jungle', 0);
      $place['Quang Trin - Quang Ngai'] = new province('Quang Trin - Quang Ngai', 'coastal', 'south', 'lowland', 2);
      $place['Quang Nam'] = new province('Quang Nam', 'coastal', 'south', 'highland', 1);
      $place['Central Laos'] = new province('Central Laos', 'inland', 'laos', 'inland', 0);
      $place['Quang Tri - Thua Thien'] = new province('Quang Tri - Thua Thien', 'coastal', 'south', 'highland', 2);
      $place['North Vietnam'] = new province('North Vietnam', 'coastal', 'north', 'highland', 0);
    }
  }
