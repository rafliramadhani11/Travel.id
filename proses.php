<?php
if ($_GET['kode'] == 'kyoto') {
    $title = 'Kyoto, Japan';
    $name = 'Kyoto';
    $img = 'kyoto.png';
    $nameDestination = 'Kyoto, Japan';
    $descDestination = 'Kyoto, or Kyoto City is a city located on the Island of Honshu, Japan. The city is part of the <br> Osaka - Kobe - Kyoto metropolitan area. Kyoto has many historical sites and is the capital city of Kyoto <br> Prefecture. A palace capital named Heian-kyō was established as the capital in 794.';
    $tour1 = 'Fushimi-ku';
    $imgTour1 = 'fushimi.jpg';
    $descTour1 = 'A hilly area between the Uji and Katsura rivers, Fushimi-ku is home to Fushimi Inari, an 8th-century shrine located on a mountain path framed by hundreds of orange torii gates';
    $tour2 = 'Kinkaku-ji';
    $imgTour2 = 'kinkakuji.jpg';
    $descTour2 = 'Kinkakuji is the common name for Rokuonji, a temple in Kyoto, Japan. The building was built in 1397 as a resting villa for the shogun Ashikaga Yoshimitsu';
    $tour3 = 'Gion';
    $imgTour3 = 'gion.jpg';
    $descTour3 = "Gion is Kyoto's geisha district, with hostesses dressed in colorful kimonos often seen on the wooden Tatsumi Bridge";
} elseif ($_GET['kode'] == 'bali') {
    $title = 'Bali, Indonesia';
    $name = 'Bali';
    $img = 'bali.png';
    $nameDestination = 'Bali, Indonesia';
    $descDestination = 'Bali is an island in Indonesia known for its green volcanic mountains, unique rice terraces, <br> beaches, and beautiful coral reefs. There are many religious tourist attractions such as the Uluwatu Temple <br> which stands on a cliff. In the South, the coastal city of Kuta offers nightlife entertainment that is never empty';
    $tour1 = 'Kuta Beach';
    $imgTour1 = 'kutabali.jpg';
    $descTour1 = 'Kuta beach is very popular with tourists for vacation spots because the coastline has very fine white sand, the sea waves are not too big, perfect for seeing sunset views and the cleanliness of the beach is very well maintained';
    $tour2 = 'Canggu';
    $imgTour2 = 'canggu.jpg';
    $descTour2 = 'Canggu is a seaside village with 10 km of beaches in the south of Bali, Indonesia. It is located in (region) North Kuta sub-district, Badung Regency, Bali Region, Indonesia.';
    $tour3 = 'Tanah Lot';
    $imgTour3 = 'tanahlot.jpg';
    $descTour3 = "Tanah Lot Temple is one of the most sacred temples in Bali, Indonesia. Here there are two temples located on a large rock. One is located on top of a rock and the other is located on a cliff similar to the Uluwatu Temple.";
} elseif ($_GET['kode'] == 'zermatt') {
    $title = 'Zermatt, Swiss';
    $name = 'Zermatt';
    $img = 'zermet.png';
    $nameDestination = 'Zermatt, Indonesia';
    $descDestination = 'Zermatt, an area in Switzerland which is famous for views of Mount Matterhorn <br> from various angles, including from the Gornergrat area. Nevertheless';
    $tour1 = 'The Matterhorn';
    $imgTour1 = 'matterhorn.jpg';
    $descTour1 = 'The Matterhorn is a remote mountain. Due to its position on a major Alpine watershed and great elevation, the Matterhorn faces rapid changes in weather.';
    $tour2 = 'Gorner Gorge';
    $imgTour2 = 'gorner.jpg';
    $descTour2 = 'One of the more unique natural attractions in Zermatt is the Gorner Gorge, also known as Gornerschlucht. This deep rock formation with a winding turquoise river flowing through it';
    $tour3 = 'Hinterdorf';
    $imgTour3 = 'hinterdorf.jpg';
    $descTour3 = 'Higher up in the village of Zermatt, beyond the Monte Rosa Hotel (the first inn built for early climbers and where you can take historical tours), is the Hinterdorf';
} elseif ($_GET['kode'] == 'bangkok') {
    $title = 'Bangkok, Thailand';
    $name = 'Bangkok';
    $img = 'bangkok.png';
    $nameDestination = 'Bangkok, Thailand';
    $descDestination = 'Bangkok, officially known as Krung Thep Maha Nakhon or Krung Thep, is the capital and largest city of Thailand. <br> The city is located on the west bank of the Chao Phraya River, near the Gulf of Thailand';
    $tour1 = 'Royal Grand Palace';
    $imgTour1 = 'grandpalace.jpg';
    $descTour1 = 'The Grand Palace is a complex of historic buildings which is the main tourist attraction in Bangkok. Royal Grand Palace which is the residence of the kings of Thailand.';
    $tour2 = 'Wat Pho';
    $imgTour2 = 'watpho.jpg';
    $descTour2 = 'Wat Phra Chettuphon Wimon Mangkhlaram Ratchaworamahawihan, formerly known as Wat Pho, also known as the Temple of the Reclining Buddha';
    $tour3 = 'Lumpini Park';
    $imgTour3 = 'tamanlumpini.jpg';
    $descTour3 = 'In Lumpini park there is a large lake which is a place for water sports, or just sitting to relax under a shady tree while enjoying the natural atmosphere.';
} elseif ($_GET['kode'] == 'yogya') {
    $title = 'Yogyakarta, Indonesia';
    $name = 'Yogyakarta';
    $img = 'yogyakarta.png';
    $nameDestination = 'Yogyakarta, Indonesia';
    $descDestination = 'Yogyakarta or known by the local community as Jogja or Yogya is the capital as well <br> as the center of government and economy of the Special Region of Yogyakarta, Indonesia.';
    $tour1 = 'Keraton Yogyakarta';
    $imgTour1 = 'keratonyogya.jpg';
    $descTour1 = 'The Ngayogyakarta Hadiningrat Palace or the Yogyakarta Palace is the official palace of the Ngayogyakarta Hadiningrat Sultanate which is now located in the city of Yogyakarta';
    $tour2 = 'Tugu Yogyakarta';
    $imgTour2 = 'tuguyogya.jpg';
    $descTour2 = 'Tugu Yogyakarta adalah sebuah tugu atau monumen yang sering dipakai sebagai simbol atau lambang dari Kota Yogyakarta.';
    $tour3 = 'Candi Borobudur';
    $imgTour3 = 'candiborobudur.jpg';
    $descTour3 = 'Borobudur Temple is a Buddhist temple located in Borobudur, Magelang, Central Java, Indonesia. This temple is located approximately 100 km to the southwest of Semarang';
}
