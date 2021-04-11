<?php

 $Acct = $_GET["User"];

 class User{
        public $success = false;
        public $photos = "";
    }
    
    class Image {
        public $Name = "";
        public $Continent = "";
        public $Country = "";
        public $Date = "";
        public $Location = "";
        public $filename = "";
        public $Tags = array();
        public $Description = "";
    }
    
    $Image0 = new Image();
    $Image0->Name = "bayerischeAlpen";
    $Image0->Continent = "Europe";
    $Image0->Country = "Germany";
    $Image0->Date = "2010";
    $Image0->Location = "Bavaria";
    $Image0->filename = "images/Joe/Europe/bayerischeAlpen.jpg";

    $Image1 = new Image();
    $Image1->Name = "bonnAltesRathaus";
    $Image1->Continent = "Europe";
    $Image1->Country = "Germany";
    $Image1->Date = "2012";
    $Image1->Location = "Bonn";
    $Image1->filename = "images/Joe/Europe/bonnAltesRathaus.jpg";
    
    $Image2 = new Image();
    $Image2->Name = "bonnUniversity";
    $Image2->Continent = "Europe";
    $Image2->Country = "Germany";
    $Image2->Date = "2012";
    $Image2->Location = "Bonn";
    $Image2->filename = "images/Joe/Europe/bonnUniversity.jpg";
    
    $Image3 = new Image();
    $Image3->Name = "dartmouth2";
    $Image3->Continent = "Europe";
    $Image3->Country = "UK";
    $Image3->Date = "2008";
    $Image3->Location = "Devon";
    $Image3->filename = "images/Joe/Europe/dartmouth2.jpg";
    
    $Image4 = new Image();
    $Image4->Name = "dartmouth4";
    $Image4->Continent = "Europe";
    $Image4->Country = "UK";
    $Image4->Date = "2008";
    $Image4->Location = "Devon";
    $Image4->filename = "images/Joe/Europe/dartmouth4.jpg";
    
    $Image5 = new Image();
    $Image5->Name = "dartmouth6";
    $Image5->Continent = "Europe";
    $Image5->Country = "UK";
    $Image5->Date = "2008";
    $Image5->Location = "Devon";
    $Image5->filename = "images/Joe/Europe/dartmouth6.jpg";
    
    $Image6 = new Image();
    $Image6->Name = "hof2a";
    $Image6->Continent = "Europe";
    $Image6->Country = "Germany";
    $Image6->Date = "2012";
    $Image6->Location = "Bavaria";
    $Image6->filename = "images/Joe/Europe/hof2a.jpg";
    
    $Image7 = new Image();
    $Image7->Name = "HouseBonesRoof";
    $Image7->Continent = "Europe";
    $Image7->Country = "Spain";
    $Image7->Date = "2007";
    $Image7->Location = "Barcelona";
    $Image7->filename = "images/Joe/Europe/HouseBonesRoof.jpg";
    
    $Image8 = new Image();
    $Image8->Name = "kinder";
    $Image8->Continent = "Europe";
    $Image8->Country = "Germany";
    $Image8->Date = "2010";
    $Image8->Location = "Bavaria";
    $Image8->filename = "images/Joe/Europe/kinder.jpg";
    
    $Image9 = new Image();
    $Image9->Name = "magicFountain";
    $Image9->Continent = "Europe";
    $Image9->Country = "Spain";
    $Image9->Date = "2007";
    $Image9->Location = "Barcelona";
    $Image9->filename = "images/Joe/Europe/magicfountain.jpg";
    
    $Image10 = new Image();
    $Image10->Name = "neuschwantstein";
    $Image10->Continent = "Europe";
    $Image10->Country = "Germany";
    $Image10->Date = "2010";
    $Image10->Location = "Bavaria";
    $Image10->filename = "images/Joe/Europe/neuschwanstein.jpg";
    
    $Image11 = new Image();
    $Image11->Name = "NewHampshire1";
    $Image11->Continent = "North America";
    $Image11->Country = "USA";
    $Image11->Date = "2007";
    $Image11->Location = "New Hampshire";
    $Image11->filename = "images/Joe/Europe/NewHampshire1.jpg";
    
    $Image12 = new Image();
    $Image12->Name = "NewHampshire2";
    $Image12->Continent = "North America";
    $Image12->Country = "USA";
    $Image12->Date = "2007";
    $Image12->Location = "New Hampshire";
    $Image12->filename = "images/Joe/Europe/NewHampshire2.jpg";
    
    $Image13 = new Image();
    $Image13->Name = "tintagel";
    $Image13->Continent = "Europe";
    $Image13->Country = "UK";
    $Image13->Date = "2008";
    $Image13->Location = "Cornwall";
    $Image13->filename = "images/Joe/Europe/tintagel.jpg";
    
    $Image14 = new Image();
    $Image14->Name = "umzug";
    $Image14->Continent = "Europe";
    $Image14->Country = "Germany";
    $Image14->Date = "2010";
    $Image14->Location = "Bavaria";
    $Image14->filename = "images/Joe/Europe/umzug.jpg";
    
    $Image15 = new Image();
    $Image15->Name = "arundel";
    $Image15->Continent = "Europe";
    $Image15->Country = "UK";
    $Image15->Date = "2005";
    $Image15->Location = "arundel";
    $Image15->filename = "images/Joe/England/arundel.jpg";
    
    $Image16 = new Image();
    $Image16->Name = "bodiam2";
    $Image16->Continent = "Europe";
    $Image16->Country = "UK";
    $Image16->Date = "2005";
    $Image16->Location = "East Sussex";
    $Image16->filename = "images/Joe/England/bodiam2.jpg";
    
    $Image17 = new Image();
    $Image17->Name = "eastbourne";
    $Image17->Continent = "Europe";
    $Image17->Country = "UK";
    $Image17->Date = "2005";
    $Image17->Location = "East Sussex";
    $Image17->filename = "images/Joe/England/eastbourne.jpg";
    
    $Image18 = new Image();
    $Image18->Name = "hever";
    $Image18->Continent = "Europe";
    $Image18->Country = "UK";
    $Image18->Date = "2005";
    $Image18->Location = "East Sussex";
    $Image18->filename = "images/Joe/England/hever.jpg";
    
    $Image19 = new Image();
    $Image19->Name = "kingstonHill";
    $Image19->Continent = "Europe";
    $Image19->Country = "UK";
    $Image19->Date = "2005";
    $Image19->Location = "Lewes";
    $Image19->filename = "images/Joe/England/kingstonHill.jpg";
    
    $Image20 = new Image();
    $Image20->Name = "leeds";
    $Image20->Continent = "Europe";
    $Image20->Country = "UK";
    $Image20->Date = "2005";
    $Image20->Location = "Kent";
    $Image20->filename = "images/Joe/England/leeds.jpg";
    
    $Image21 = new Image();
    $Image21->Name = "lewes2";
    $Image21->Continent = "Europe";
    $Image21->Country = "UK";
    $Image21->Date = "2005";
    $Image21->Location = "Lewes";
    $Image21->filename = "images/Joe/England/lewes2.jpg";
    
    $Image22 = new Image();
    $Image22->Name = "sheep";
    $Image22->Continent = "Not provided";
    $Image22->Country = "Not provided";
    $Image22->Date = "Not provided";
    $Image22->Location = "Not provided";
    $Image22->filename = "images/Joe/England/sheep.jpg";
    
    $Image23 = new Image();
    $Image23->Name = "southDowns";
    $Image23->Continent = "Europe";
    $Image23->Country = "UK";
    $Image23->Date = "2005";
    $Image23->Location = "Lewes";
    $Image23->filename = "images/Joe/England/southDowns.jpg";
    
    $Image24 = new Image();
    $Image24->Name = "southover";
    $Image24->Continent = "Europe";
    $Image24->Country = "UK";
    $Image24->Date = "2005";
    $Image24->Location = "Lewes";
    $Image24->filename = "images/Joe/England/southover.jpg";
    
    $Image25 = new Image();
    $Image25->Name = "stPancras";
    $Image25->Continent = "Europe";
    $Image25->Country = "UK";
    $Image25->Date = "2005";
    $Image25->Location = "Lewes";
    $Image25->filename = "images/Joe/England/stPancras.jpg";
    
    $Image26 = new Image();
    $Image26->Name = "baldyFromCopper";
    $Image26->Continent = "North America";
    $Image26->Country = "USA";
    $Image26->Date = "2017";
    $Image26->Location = "New Mexico";
    $Image26->filename = "images/Joe/Philmont/baldyFromCopper.jpg";
    
    $Image27 = new Image();
    $Image27->Name = "baldyFromMeadow";
    $Image27->Continent = "North America";
    $Image27->Country = "USA";
    $Image27->Date = "2017";
    $Image27->Location = "New Mexico";
    $Image27->filename = "images/Joe/Philmont/baldyFromMeadow.jpg";
    
    $Image28 = new Image();
    $Image28->Name = "canyonLight";
    $Image28->Continent = "North America";
    $Image28->Country = "USA";
    $Image28->Date = "2017";
    $Image28->Location = "New Mexico";
    $Image28->filename = "images/Joe/Philmont/canyonLight.jpg";
    
    $Image29 = new Image();
    $Image29->Name = "lowClouds";
    $Image29->Continent = "North America";
    $Image29->Country = "USA";
    $Image29->Date = "2017";
    $Image29->Location = "New Mexico";
    $Image29->filename = "images/Joe/Philmont/lowClouds.jpg";
    
    $Image30 = new Image();
    $Image30->Name = "sparPole";
    $Image30->Continent = "North America";
    $Image30->Country = "USA";
    $Image30->Date = "2017";
    $Image30->Location = "New Mexico";
    $Image30->filename = "images/Joe/Philmont/sparPole.jpg";
    
    $Image31 = new Image();
    $Image31->Name = "startOfTrail";
    $Image31->Continent = "North America";
    $Image31->Country = "USA";
    $Image31->Date = "2017";
    $Image31->Location = "New Mexico";
    $Image31->filename = "images/Joe/Philmont/startOfTrail.jpg";
    
    $Image32 = new Image();
    $Image32->Name = "toothOfTime";
    $Image32->Continent = "North America";
    $Image32->Country = "USA";
    $Image32->Date = "2017";
    $Image32->Location = "New Mexico";
    $Image32->filename = "images/Joe/Philmont/toothOfTime.jpg";
    
    $Image33 = new Image();
    $Image33->Name = "trailSigns";
    $Image33->Continent = "North America";
    $Image33->Country = "USA";
    $Image33->Date = "2017";
    $Image33->Location = "New Mexico";
    $Image33->filename = "images/Joe/Philmont/trailSigns.jpg";
    
    $Image34 = new Image();
    $Image34->Name = "upTheCanyon";
    $Image34->Continent = "North America";
    $Image34->Country = "USA";
    $Image34->Date = "2017";
    $Image34->Location = "New Mexico";
    $Image34->filename = "images/Joe/Philmont/upTheCanyon.jpg";
    
    $Image35 = new Image();
    $Image35->Name = "jawsBridge";
    $Image35->Continent = "North America";
    $Image35->Country = "USA";
    $Image35->Date = "2015";
    $Image35->Location = "Massachusetts";
    $Image35->filename = "images/Joe/CapeCod/jawsBridge.jpg";
    
    $Image36 = new Image();
    $Image36->Name = "mvcma";
    $Image36->Continent = "North America";
    $Image36->Country = "USA";
    $Image36->Date = "2015";
    $Image36->Location = "Massachusetts";
    $Image36->filename = "images/Joe/CapeCod/mvcma.jpg";
    
    $Image37 = new Image();
    $Image37->Name = "painesCreek";
    $Image37->Continent = "North America";
    $Image37->Country = "USA";
    $Image37->Date = "2016";
    $Image37->Location = "Massachusetts";
    $Image37->filename = "images/Joe/CapeCod/painesCreek.jpg";
    
    $Image38 = new Image();
    $Image38->Name = "seabase";
    $Image38->Continent = "North America";
    $Image38->Country = "USA";
    $Image38->Date = "2015";
    $Image38->Location = "Florida Keys";
    $Image38->filename = "images/Joe/CapeCod/seabase.jpg";
    
    $Image39 = new Image();
    $Image39->Name = "seabase4";
    $Image39->Continent = "North America";
    $Image39->Country = "USA";
    $Image39->Date = "2015";
    $Image39->Location = "Florida Keys";
    $Image39->filename = "images/Joe/CapeCod/seabase4.jpg";
    
    $Image40 = new Image();
    $Image40->Name = "seabase5";
    $Image40->Continent = "North America";
    $Image40->Country = "USA";
    $Image40->Date = "2015";
    $Image40->Location = "Florida Keys";
    $Image40->filename = "images/Joe/CapeCod/seabase5.jpg";
    
    $Image41 = new Image();
    $Image41->Name = "seabase8";
    $Image41->Continent = "North America";
    $Image41->Country = "USA";
    $Image41->Date = "2015";
    $Image41->Location = "Florida Keys";
    $Image41->filename = "images/Joe/CapeCod/seabase8.jpg";
    
    $Image42 = new Image();
    $Image42->Name = "seabase11";
    $Image42->Continent = "North America";
    $Image42->Country = "USA";
    $Image42->Date = "2015";
    $Image42->Location = "Gulf of Mexico";
    $Image42->filename = "images/Joe/CapeCod/seabase11.jpg";
    
    $Image43 = new Image();
    $Image43->Name = "vineyardHaven";
    $Image43->Continent = "North America";
    $Image43->Country = "USA";
    $Image43->Date = "2015";
    $Image43->Location = "Massachusetts";
    $Image43->filename = "images/Joe/CapeCod/vineyardHaven.jpg";
    
    $Image44 = new Image();
    $Image44->Name = "westChop";
    $Image44->Continent = "North America";
    $Image44->Country = "USA";
    $Image44->Date = "2015";
    $Image44->Location = "Massachusetts";
    $Image44->filename = "images/Joe/CapeCod/westChop.jpg";
    
    $Image45 = new Image();
    $Image45->Name = "westChop";
    $Image45->Continent = "North America";
    $Image45->Country = "USA";
    $Image45->Date = "2015";
    $Image45->Location = "Massachusetts";
    $Image45->filename = "images/Joe/CapeCod/westChop2.jpg";
    
    $Image46 = new Image();
    $Image46->Name = "bison1";
    $Image46->Continent = "North America";
    $Image46->Country = "USA";
    $Image46->Date = "2016";
    $Image46->Location = "Wyoming";
    $Image46->filename = "images/Joe/Yellowstone/bison1.jpg";
    
    $Image47 = new Image();
    $Image47->Name = "bisonMud";
    $Image47->Continent = "North America";
    $Image47->Country = "USA";
    $Image47->Date = "2016";
    $Image47->Location = "Wyoming";
    $Image47->filename = "images/Joe/Yellowstone/bisonMud.jpg";
    
    $Image48 = new Image();
    $Image48->Name = "castleGeyser";
    $Image48->Continent = "North America";
    $Image48->Country = "USA";
    $Image48->Date = "2016";
    $Image48->Location = "Wyoming";
    $Image48->filename = "images/Joe/Yellowstone/castleGeyser.jpg";
    
    $Image49 = new Image();
    $Image49->Name = "grandCanyon4";
    $Image49->Continent = "North America";
    $Image49->Country = "USA";
    $Image49->Date = "2016";
    $Image49->Location = "Wyoming";
    $Image49->filename = "images/Joe/Yellowstone/grandCanyon6.jpg";
    
    $Image50 = new Image();
    $Image50->Name = "grandCanyon6";
    $Image50->Continent = "North America";
    $Image50->Country = "USA";
    $Image50->Date = "2016";
    $Image50->Location = "Wyoming";
    $Image50->filename = "images/Joe/Yellowstone/grandCanyon6.jpg";
    
    $Image51 = new Image();
    $Image51->Name = "grandPrismatic1";
    $Image51->Continent = "North America";
    $Image51->Country = "USA";
    $Image51->Date = "2016";
    $Image51->Location = "Wyoming";
    $Image51->filename = "images/Joe/Yellowstone/grandPrismatic1.jpg";
    
    $Image52 = new Image();
    $Image52->Name = "mtWashburn";
    $Image52->Continent = "North America";
    $Image52->Country = "USA";
    $Image52->Date = "2016";
    $Image52->Location = "Wyoming";
    $Image52->filename = "images/Joe/Yellowstone/mtWashburn.jpg";
    
    $Image53 = new Image();
    $Image53->Name = "yellowstoneLake";
    $Image53->Continent = "North America";
    $Image53->Country = "USA";
    $Image53->Date = "2016";
    $Image53->Location = "Wyoming";
    $Image53->filename = "images/Joe/Yellowstone/yellowstoneLake.jpg";
    
    $Image54 = new Image();
    $Image54->Name = "";
    $Image54->Continent = "South America";
    $Image54->Country = "Argentina";
    $Image54->Date = "2015";
    $Image54->Location = "Buenos Aires";
    $Image54->filename = "images/Jane/Argentina/buenosaires.jpg";
    $Image54->Tags = array("city", "buildings", "trees", "sky");
    $Image54->Description = "Monument 'Obelisco' in Buenos Aires, Argentina (2015).";
    
    $Image55 = new Image();
    $Image55->Name = "";
    $Image55->Continent = "South America";
    $Image55->Country = "Argentina";
    $Image55->Date = "2015";
    $Image55->Location = "Buenos Aires";
    $Image55->filename = "images/Jane/Argentina/city.jpg";
    $Image55->Tags = array("city","buildings", "sunset", "sky");
    $Image55->Description = "City of Buenos Aires, Argentina (2015).";
    
    $Image56 = new Image();
    $Image56->Name = "";
    $Image56->Continent = "South America";
    $Image56->Country = "Argentina";
    $Image56->Date = "2015";
    $Image56->Location = "";
    $Image56->filename = "images/Jane/Argentina/glacier.jpg";
    $Image56->Tags = array("glacier", "lake", "water", "mountains");
    $Image56->Description = "Glacier in southern Argentina (2015).";
    
    $Image57 = new Image();
    $Image57->Name = "";
    $Image57->Continent = "South America";
    $Image57->Country = "Argentina";
    $Image57->Date = "2015";
    $Image57->Location = "Buenos Aires";
    $Image57->filename = "images/Jane/Argentina/houses.jpg";
    $Image57->Tags = array("city", "buildings", "houses", "sky");
    $Image57->Description = "Houses in Buenos Aires, Argentina (2015).";
    
    $Image58 = new Image();
    $Image58->Name = "";
    $Image58->Continent = "South America";
    $Image58->Country = "Argentina";
    $Image58->Date = "2015";
    $Image58->Location = "Buenos Aires";
    $Image58->filename = "images/Jane/Argentina/messi.jpg";
    $Image58->Tags = array("soccer", "Messi", "grass");
    $Image58->Description = "Messi battles against Neymar in a soccer game in Buenos Aires, Argentina (2015).";
    
    $Image59 = new Image();
    $Image59->Name = "";
    $Image59->Continent = "South America";
    $Image59->Country = "Brazil";
    $Image59->Date = "2014";
    $Image59->Location = "Rio de Janeiro";
    $Image59->filename = "images/Jane/Brazil/coast.jpg";
    $Image59->Tags = array("city", "buildings", "mountains", "sky", "coast", "ocean");
    $Image59->Description = "Coast of Rio de Janeiro, Brazil (2014).";
    
    $Image60 = new Image();
    $Image60->Name = "";
    $Image60->Continent = "South America";
    $Image60->Country = "Brazil";
    $Image60->Date = "2014";
    $Image60->Location = "Rio de Janeiro";
    $Image60->filename = "images/Jane/Brazil/football.jpg";
    $Image60->Tags = array("soccer", "people", "grass");
    $Image60->Description = "National team, Rio de Janeiro, Brazil (2014).";
    
    $Image61 = new Image();
    $Image61->Name = "";
    $Image61->Continent = "South America";
    $Image61->Country = "Brazil";
    $Image61->Date = "2014";
    $Image61->Location = "Rio de Janeiro";
    $Image61->filename = "images/Jane/Brazil/hill.jpg";
    $Image61->Tags = array("city", "buildings", "monument", "statue", "hill", "ocean");
    $Image61->Description = "Statue of Jesus, Rio de Janeiro, Brazil (2014).";
    
    $Image62 = new Image();
    $Image62->Name = "";
    $Image62->Continent = "South America";
    $Image62->Country = "Brazil";
    $Image62->Date = "2014";
    $Image62->Location = "Rio de Janeiro";
    $Image62->filename = "images/Jane/Brazil/hill2.jpg";
    $Image62->Tags = array("trees", "ocean", "hill", "sky");
    $Image62->Description = "Gondola in the sky, Rio de Janeiro, Brazil (2014).";
    
    $Image63 = new Image();
    $Image63->Name = "";
    $Image63->Continent = "South America";
    $Image63->Country = "Brazil";
    $Image63->Date = "2014";
    $Image63->Location = "Rio de Janeiro";
    $Image63->filename = "images/Jane/Brazil/street.jpg";
    $Image63->Tags = array("city", "buildings", "street", "sky", "people");
    $Image63->Description = "Streets of Rio de Janeiro, Brazil (2014).";
    
    $Image64 = new Image();
    $Image64->Name = "";
    $Image64->Continent = "South America";
    $Image64->Country = "Chile";
    $Image64->Date = "2016";
    $Image64->Location = "Santiago";
    $Image64->filename = "images/Jane/Chile/animal.jpg";
    $Image64->Tags = array("llama", "mountains", "water", "sky");
    $Image64->Description = "A llama sits on a hill, Santiago, Chile (2016).";
    
    $Image65 = new Image();
    $Image65->Name = "";
    $Image65->Continent = "South America";
    $Image65->Country = "Chile";
    $Image65->Date = "2016";
    $Image65->Location = "Santiago";
    $Image65->filename = "images/Jane/Chile/city.jpg";
    $Image65->Tags = array("city", "buildings", "trees", "sky", "mountains");
    $Image65->Description = "City of Santiago, Chile (2016).";
    
    $Image66 = new Image();
    $Image66->Name = "";
    $Image66->Continent = "South America";
    $Image66->Country = "Chile";
    $Image66->Date = "2016";
    $Image66->Location = "Santiago";
    $Image66->filename = "images/Jane/Chile/coast.jpg";
    $Image66->Tags = array("city", "buildings", "trees", "ocean");
    $Image66->Description = "World's largest swimming pool, Santiago, Chile (2016).";
    
    $Image67 = new Image();
    $Image67->Name = "";
    $Image67->Continent = "South America";
    $Image67->Country = "Chile";
    $Image67->Date = "2016";
    $Image67->Location = "Santiago";
    $Image67->filename = "images/Jane/Chile/gov.jpg";
    $Image67->Tags = array("people", "buildings", "grass", "sky");
    $Image67->Description = "La Moneda Palace, Santiago, Chile (2016).";
    
    $Image68 = new Image();
    $Image68->Name = "";
    $Image68->Continent = "South America";
    $Image68->Country = "Chile";
    $Image68->Date = "2016";
    $Image68->Location = "Santiago";
    $Image68->filename = "images/Jane/Chile/monument.jpg";
    $Image68->Tags = array("monument", "grass", "sky");
    $Image68->Description = "Ahu Tongariki Monuments, Santiago, Chile (2016).";
    
    $Image69 = new Image();
    $Image69->Name = "";
    $Image69->Continent = "Asia";
    $Image69->Country = "China";
    $Image69->Date = "2017";
    $Image69->Location = "Beijing";
    $Image69->filename = "images/Jane/China/city.jpg";
    $Image69->Tags = array("city", "buildings", "river", "sky", "sunset");
    $Image69->Description = "The city of Beijing, China (2017).";
    
    $Image70 = new Image();
    $Image70->Name = "";
    $Image70->Continent = "Asia";
    $Image70->Country = "China";
    $Image70->Date = "2017";
    $Image70->Location = "Beijing";
    $Image70->filename = "images/Jane/China/gov.jpg";
    $Image70->Tags = array("sunset", "buildings", "sky");
    $Image70->Description = "Old historical landmark, Beijing, China (2017).";
    
    $Image71 = new Image();
    $Image71->Name = "";
    $Image71->Continent = "Asia";
    $Image71->Country = "China";
    $Image71->Date = "2017";
    $Image71->Location = "Beijing";
    $Image71->filename = "images/Jane/China/greatwall.jpg";
    $Image71->Tags = array("hills", "trees", "sunset", "sky");
    $Image71->Description = "The Great Wall, Beijing, China (2017).";
    
    $Image72 = new Image();
    $Image72->Name = "";
    $Image72->Continent = "Asia";
    $Image72->Country = "China";
    $Image72->Date = "2017";
    $Image72->Location = "Beijing";
    $Image72->filename = "images/Jane/China/morecity.jpg";
    $Image72->Tags = array("city", "buildings", "trees", "street");
    $Image72->Description = "Streets of Beijing, China (2017).";
    
    $Image73 = new Image();
    $Image73->Name = "";
    $Image73->Continent = "Asia";
    $Image73->Country = "China";
    $Image73->Date = "2017";
    $Image73->Location = "Beijing";
    $Image73->filename = "images/Jane/China/nice.jpg";
    $Image73->Tags = array("sunset", "buildings", "peoples", "sky", "ocean");
    $Image73->Description = "Sunset in Beijing, China (2017).";
    
    $Image74 = new Image();
    $Image74->Name = "";
    $Image74->Continent = "Asia";
    $Image74->Country = "China";
    $Image74->Date = "2017";
    $Image74->Location = "Beijing";
    $Image74->filename = "images/Jane/China/wow.jpg";
    $Image74->Tags = array("trees", "mountains", "people", "sky");
    $Image74->Description = "Tourist walks on a bridge, Beijing, China (2017).";
    
    $Image75 = new Image();
    $Image75->Name = "";
    $Image75->Continent = "Asia";
    $Image75->Country = "Nepal";
    $Image75->Date = "2013";
    $Image75->Location = "Kathmandu";
    $Image75->filename = "images/Jane/Nepal/morecity.jpg";
    $Image75->Tags = array("trees", "city", "buildings", "monument");
    $Image75->Description = "Swayambhunath Stupa, Kathmandu, Nepal (2013).";
    
    $Image76 = new Image();
    $Image76->Name = "";
    $Image76->Continent = "Asia";
    $Image76->Country = "Nepal";
    $Image76->Date = "2013";
    $Image76->Location = "Kathmandu";
    $Image76->filename = "images/Jane/Nepal/mountains.jpg";
    $Image76->Tags = array("snow", "mountains", "sky");
    $Image76->Description = "Himalayan mountain range, Nepal (2013).";
    
    $Image77 = new Image();
    $Image77->Name = "";
    $Image77->Continent = "Asia";
    $Image77->Country = "Nepal";
    $Image77->Date = "2013";
    $Image77->Location = "Kathmandu";
    $Image77->filename = "images/Jane/Nepal/people.jpg";
    $Image77->Tags = array("people", "grass");
    $Image77->Description = "Villager poses for a photo, Kathmandu, Nepal (2013).";
    
    $Image78 = new Image();
    $Image78->Name = "";
    $Image78->Continent = "Asia";
    $Image78->Country = "Nepal";
    $Image78->Date = "2013";
    $Image78->Location = "Kathmandu";
    $Image78->filename = "images/Jane/Nepal/stupa.jpg";
    $Image78->Tags = array("monument", "buildings", "city", "sky");
    $Image78->Description = "Boudha Stupa, Kathmandu, Nepal (2013).";
    
    $Image79 = new Image();
    $Image79->Name = "";
    $Image79->Continent = "Asia";
    $Image79->Country = "Nepal";
    $Image79->Date = "2013";
    $Image79->Location = "Kathmandu";
    $Image79->filename = "images/Jane/Nepal/village.jpg";
    $Image79->Tags = array("village", "mountains", "buildings", "sky");
    $Image79->Description = "Village of Langtang, Nepal (2013).";
    
    $Image80 = new Image();
    $Image80->Name = "";
    $Image80->Continent = "Asia";
    $Image80->Country = "Nepal";
    $Image80->Date = "2013";
    $Image80->Location = "Kathmandu";
    $Image80->filename = "images/Jane/Nepal/city.jpg";
    $Image80->Tags = array("city", "buildings", "people", "sky");
    $Image80->Description = "Patan Durbar Square, Kathmandu, Nepal (2013).";
    
    echo($Acct);
    if ($Acct === 'Joe'){
         $Joe = new User();
         $Joe->success = true;
         $Joe->photos = array($Image0, $Image1, $Image2, $Image3, $Image4, $Image5, $Image6, $Image7, $Image8, $Image9, $Image10, $Image11, $Image12, $Image13, $Image14, $Image15, $Image16, $Image17, $Image18, $Image19, $Image20, $Image21, $Image22, $Image23, $Image24, $Image25, $Image26, $Image27, $Image28, $Image29, $Image30, $Image31, $Image32, $Image33, $Image34, $Image35, $Image36, $Image37, $Image38, $Image39, $Image40, $Image41, $Image42, $Image43, $Image44, $Image45, $Image46, $Image47, $Image48, $Image49, $Image50, $Image51, $Image52, $Image53);
         echo json_encode($Joe);
    } else if ($Acct === 'Jane') {
        $Jane = new User();
        $Jane->success = true;
        $Jane->photos = array($Image54, $Image55, $Image56, $Image57, $Image58, $Image59, $Image60, $Image61, $Image62, $Image63, $Image64, $Image65, $Image66, $Image67, $Image68, $Image69, $Image70, $Image71, $Image72, $Image73, $Image74, $Image75, $Image76, $Image77, $Image78, $Image79, $Image80);
        echo json_encode($Jane);
    }
    else{
        $Jimbo = new User();
        $Jimbo->success = false;
        echo json_encode($Jimbo);
    }
?>