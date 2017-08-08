<?php

namespace MareiClasses\CountryAssets;

use \MareiClasses\CountryAssets\CountryAssets;

class EgyAreas extends CountryAssets{

	/**
	 * Items array that holds areas.
	 *
	 * @var array $items
	 */
	protected static $items = ['10 Ramadan City', '15 Mayu', 'Abdin', 'Abnub', 'Abour', 'Abshaway', 'Abu Hammad', 'Abu Hummus', 'Abu Kabir', 'Abu Qurqas', 'Abu Radis', 'Abu Simbel', 'Abu Tig', 'Abu Tisht', 'Abu-l-Matamir', 'A-Dakhla Oasis', 'Adfu', 'Aga', 'Ahnasya', 'Ain Shams', 'Akhmim', 'Akhmim City', 'Al Amreia', 'Al Attarin', 'Al Azbakiyya', 'Al- Badari', 'Al Darb al-Ahmar', 'Al Dikhila', 'Al Farafra Oasis', 'Al Fashn', 'Al Gumruk', 'Al Hamul', 'Al Idwa', 'Al Khalifa', 'Al Khanka', 'Al Labban', 'Al Manshiyya', 'Al Matariyya', 'Al Minya', 'Al Muntazah', 'Al Raml', 'Al Sahil', 'Al Salam', 'Al Sharabiyya', 'Al Tibbin', 'Al Usayrat', 'Al Waqf', 'Al Wasta', 'Al Wayli', 'Al Zahir', 'Al Zaytun', 'Al-Aguza', 'Al-Ahram', 'Alamn', 'Al-Arab', 'Al-Arbiin', 'Al-Bagur', 'Al-Balyana', 'Al-Dawahy', 'Al-Dilingat', 'Alfath', 'Al-Ganayin', 'Al-Ganoub', 'Al-Ghanayem', 'Al-Hammam', 'Al-Hasna', 'Al-Husayniya', 'Al-Kharga Oasis', 'Al-Mahmudiyya', 'Al-Manasra', 'Al-Maragha', 'Al-Minshat', 'Al-Munakh', 'Al-Qanayat', 'al-Qantara Gharb', 'al-Qantara Sharq', 'Al-Qusia', 'Al-Rahmaniyya', 'Al-Salhiyya', 'Al-Sharq', 'Al-Shuhada', 'al-Tal al-Kabir', 'Al-Tur', 'Al-Zohour', 'Armant', 'Ashmun', 'Aswan', 'Aswan City', 'Asyut', 'Asyut City', 'Ataqa', 'Atfeh', 'Atsa', 'Awlad Saqr', 'Ayat', 'Bab Al-Shariyya', 'Bab Sharqi', 'Badr', 'Badr', 'Badrashain', 'Bahariya Oasis', 'Banha', 'Banha Kism', 'Bani Mazar', 'Bani Swayf', 'Bani Swayf City', 'Bani Swayf Kism', 'Bany Abeed', 'Baris police station', 'Basatin', 'Basyun', 'Biba', 'Bilbis', 'Bilqas', 'Bir Al-Abd', 'Birkat Al-Sab', 'Biyalu', 'Bulaq', 'Bulaq Al-DakrUr', 'Burg al-Arab', 'Burg Al-Arab City', 'Burullus', 'Daba', 'Dahab', 'Dakhalia', 'Damanhur', 'Damanhur Kism', 'Dar al-Salam', 'Daraw', 'Dayrut', 'Dikirnis', 'Dir Mawas', 'Dishna', 'Disuq', 'Disuq Kism', 'Dokki', 'Dumyat', 'Dumyat Al-Gadida', 'Dyarb Nigm', 'El Arish', 'El Mahalla El Kobra', 'El Mansora', 'El Mansora Markaz', 'El-Ibrahimiya', 'Faqus Kism', 'Fariskur', 'Farshut', 'Fayid', 'Faysal', 'Fayyum', 'Fayyum City', 'Fayyum Kism', 'Fuwwa', 'Gamaliyya', 'Gamaliyya', 'Girga', 'Girga Kism', 'Giza', 'Guhayna Al-Gharbiyya', 'Hadaiq Al-Qubba', 'Halayib', 'Helwan', 'Hihya', 'Hurghada', 'Hush Isa', 'Hwamdeia', 'Idku', 'Imbaba', 'Ismailiyya', 'Isna', 'Itay Al-Barud', 'Kafr Al-Dawwar', 'Kafr Al-Dawwar Kism', 'Kafr Al-Shaykh', 'Kafr Al-Shaykh Kism', 'Kafr Al-Zayyat', 'Kafr Sad', 'Kafr Saqr', 'Kafr Shukr', 'Kardasa', 'Karmuz', 'Kawther', 'Kesm Al-minya', 'Kesm Awal Asyut', 'Kesm Mallawi', 'Kesm Tahta', 'Kesm than Al Raml', 'Kesm Than Asyut', 'Khsos', 'Kum Hamada', 'Kum Umbu', 'Luxor', 'Luxor Kism', 'Maadi', 'Maghagha', 'Mahalet Demna', 'Mallawi', 'Manfalut', 'Manzala', 'Marg', 'Marsa Alam', 'Marsa Matruh', 'Mashtul Al-Suq', 'Matariyya', 'Matay', 'Mina Al-Basal', 'Minshat Nasir', 'Minuf', 'Minuf City', 'Minya Al-Nasr', 'Minya al-Qamh', 'Misr al-Gadida', 'Misr Al-Qadima', 'Mit Ghamr', 'Mit Ghamr Kism', 'MIt Salsil', 'Mitubas', 'Mubark-Sharq Tafrea', 'Muharam Bik', 'Muski', 'Nag Hammadi', 'Nakhl', 'Naqada', 'Nasir', 'Nasr', 'Nasr City', 'Nebro', 'New Cairo', 'New Minya', 'North Coast', 'North Coast', 'Nubariyya West', 'Nuweiba', 'Nuzha', 'October', 'Police Department Port of Damietta', 'Police Department Port Said Port', 'Port Alexandria Police Department', 'Port Fuad', 'Port Fuad Kism', 'Port Suez Police Department', 'Qaha', 'Qalyub', 'Qalyub Kism', 'Qanatir Al-Khayriyya', 'Qasima', 'Qasr Al-Nile', 'Qift', 'Qillin', 'Qina', 'Qina City', 'Qina Kism', 'Qurin', 'Qus', 'Qusir', 'Qutur', 'Quwisna', 'Rafah', 'Ras al-Bar', 'Ras Gharib', 'Ras Sidr', 'Rashid', 'Riyad', 'Rud Al-Farag', 'Rummana', 'Sadat City', 'Saf', 'Safaga', 'Sahil Silim', 'Salloum', 'Samalut', 'Samannud', 'Sant Katrin', 'Santa', 'Saqulta', 'Sayyida Zainab', 'Shallatin', 'Sharm el-Sheikh', 'Shaykh Zuwayd', 'Shibin al-Kum', 'Shibin al-Kum Kism', 'Shibin al-Qanatir', 'Shirbin', 'Shroq', 'Shubra', 'Shubra KhÃŽt', 'Sidfa', 'Sidi Barani', 'Sidi Gabir', 'Sidi Salim', 'Sinbillawin', 'Sinuras', 'Sirs Al-Layyana Kism', 'Siwa', 'Suez', 'Suhag', 'Suhag City', 'Sumusta', 'Taba', 'Tahta', 'Tala', 'Talkha', 'Tama', 'Tamy Al-Amdid', 'Tamya', 'Tanta', 'Tiba police station', 'Tukh', 'Tura', 'Tushaka', 'Umraniyya', 'Wadi Al-NatrUn', 'Waraq', 'Yousef El sadeq', 'Zamalik', 'Zaqaziq', 'Zarqa', 'Zawiyya Al-Hamra', 'Zifta'];
}