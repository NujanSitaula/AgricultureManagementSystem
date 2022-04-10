function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "province1"){
    var optionArray = ["Select District|Select District","bhojpur|Bhojpur",
            "dhankuta|Dhankuta",
            "ilam|Ilam",
            "jhapa|Jhapa",
            "khotang|Khotang",
            "morang|Morang",
            "okhaldhunga|Okhaldhunga",
            "panchthar|Panchthar",
            "sankhuwasabha|Sankhuwasabha",
            "solukhumbu|Solukhumbu",
            "sunsari|Sunsari",
            "taplejung|Taplejung",
            "terhathum|Terhathum",
            "udayapur|Udayapur"];
  }
  else if(s1.value == "province2"){
    var optionArray = ["Select District|Select District","bara|Bara",
                "dhanusha|Dhanusha",
                "mahottari|Mahottari",
                "parsa|Parsa",
                "rautahat|Rautahat",
                "saptari|Saptari",
                "sarlahi|Sarlahi",
                "siraha|Siraha"];
  }

  else if(s1.value == "province3"){
    var optionArray = ["Select District|Select District","bhaktapur|Bhaktapur",
                "chitwan|Chitwan",
                "dhading|Dhading",
                "dolakha|Dolakha",
                "kathmandu|Kathmandu",
                "kavrepalanchok|Kavrepalanchok",
                "lalitpur|Lalitpur",
                "makwanpur|Makwanpur",
                "nuwakot|Nuwakot",
                "ramechhap|Ramechhap",
                "rasuwa|Rasuwa",
                "sindhuli|Sindhuli",
                "sindhupalchok|Sindhupalchok"];
              }

  else if(s1.value == "province4"){
      var optionArray = ["Select District|Select District","baglung|Baglung",
          "gorkha|Gorkha",
          "kaski|Kaski",
          "lamjung|Lamjung",
          "manang|Manang",
          "mustang|Mustang",
          "myagdi|Myagdi",
          "nawalpur|Nawalpur",
          "nuwakot|Nuwakot",
          "parbat|Parbat",
          "syangja|Syangja",
          "tanahun|Tanahun"];
  }

  else if(s1.value == "province5"){
      var optionArray = ["Select District|Select District","arghakhanchi|Arghakhanchi",
          "banke|Banke",
          "bardiya|Bardiya",
          "dang|Dang",
          "eastern rukum|Eastern Rukum",
          "gulmi|Gulmi",
          "kapilvastu|Kapilvastu",
          "palpa|Palpa",
          "parasi|Parasi",
          "pyuthan|Pyuthan",
          "rolpa|Rolpa",
          "rupandehi|Rupandehi"];
  }

  else if(s1.value == "province6"){
      var optionArray = ["Select District|Select District","dailekh|Dailekh",
          "dolpa|Dolpa",
          "humla|Humla",
          "jajarkot|Jajarkot",
          "jumla|Jumla",
          "kalikot|Kalikot",
          "mugu|Mugu",
          "salyan|Salyan",
          "surkhet|Surkhet",
          "western rukum|Western Rukum"];
  }

  else if(s1.value == "province7"){
      var optionArray = ["Select District|Select District","achham|Achham",
          "baitadi|Baitadi",
          "bajhang|Bajhang",
          "bajura|Bajura",
          "dadeldhura|Dadeldhura",
          "darchula|Darchula",
          "doti|Doti",
          "kailali|Kailali",
          "kanchanpur|Kanchanpur"];
  }


  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}
function populateLocal(s3,s4){
  var s3 = document.getElementById(s3);
  var s4 = document.getElementById(s4);
  s4.innerHTML = "";
  if(s3.value == "bhojpur"){
    var optionArray = ["Select Local Level|Select Local Level","aamchok rural municipality|Aamchok Rural Municipality","arun rural municipality|Arun Rural Municipality","bhojpur municipality|Bhojpur Municipality","hatuwagadhi rural municipality|Hatuwagadhi Rural Municipality","pauwadungma rural municipality|Pauwadungma Rural Municipality","ramprasad rai rural municipality|Ramprasad Rai Rural Municipality","salpasilichho rural municipality|Salpasilichho Rural Municipality","shadanand municipality|Shadanand Municipality","temkemaiyum rural municipality|Temkemaiyum Rural Municipality"];
  }
  else if(s3.value == "dhankuta"){
    var optionArray = ["Select Local Level|Select Local Level","chaubise rural municipality|Chaubise Rural Municipality","chhathar jorpati rural municipality|Chhathar Jorpati Rural Municipality","dhankuta municipality|Dhankuta Municipality","mahalaxmi municipality|Mahalaxmi Municipality","pakhribas municipality|Pakhribas Municipality","sangurigadhi rural municipality|Sangurigadhi Rural Municipality","shahidbhumi rural municipality|Shahidbhumi Rural Municipality"];

  }
  else if(s3.value == "ilam"){
    var optionArray = ["Select Local Level|Select Local Level","chulachuli rural municipality|Chulachuli Rural Municipality","deumai municipality|Deumai Municipality","ilam municipality|Ilam Municipality","mai jogmai rural municipality|Mai Jogmai Rural Municipality","mai municipality|Mai Municipality","Mangsebung Rural Municipality|Mangsebung Rural Municipality","Phakphokthum Rural Municipality|Phakphokthum Rural Municipality","Rong Rural Municipality|Rong Rural Municipality","Sandakpur Rural Municipality|Sandakpur Rural Municipality","Suryodaya Municipality|Suryodaya Municipality"];
  }
  else if(s3.value == "jhapa"){
    var optionArray = ["Select Local Level|Select Local Level","arjundhara municipality|Arjundhara Municipality","barhadashi rural municipality|Barhadashi Rural Municipality","bhadrapur municipality|Bhadrapur Municipality","birtamod municipality|Birtamod Municipality","buddha shanti rural municipality|Buddha Shanti Rural Municipality","damak municipality|Damak Municipality","gauradaha municipality|Gauradaha Municipality","gaurigunj rural municipality|Gaurigunj Rural Municipality","haldibari rural municipality|Haldibari Rural Municipality","jhapa rural municipality|Jhapa Rural Municipality","kachankawal rural municipality|Kachankawal Rural Municipality","kamal rural municipality|Kamal Rural Municipality","kankai municipality|Kankai Municipality","mechinagar municipality|Mechinagar Municipality","shivasatakshi municipality|Shivasatakshi Municipality"];
  }
  else if(s3.value == "khotang"){
    var optionArray = ["Select Local Level|Select Local Level","aiselukharka rural municipality|Aiselukharka Rural Municipality","barahpokhari rural municipality|Barahpokhari Rural Municipality","diktel rupakot majhuwagadhi municipality|Diktel Rupakot Majhuwagadhi Municipality","diprung chuichumma rural municipality|Diprung Chuichumma Rural Municipality","halesi tuwachung municipality|Halesi Tuwachung Municipality","jantedhunga rural municipality|Jantedhunga Rural Municipality","kepilasgadhi rural municipality|Kepilasgadhi Rural Municipality","khotehang rural municipality|Khotehang Rural Municipality","rawa besi rural municipality|Rawa Besi Rural Municipality","sakela rural municipality|Sakela Rural Municipality"];
  }
  else if(s3.value == "morang"){
    var optionArray = ["Select Local Level|Select Local Level","belbari municipality|Belbari Municipality","biratnagar metopolitan city|Biratnagar Metopolitan City","budi ganga rural municipality|Budi Ganga Rural Municipality","dhanpalthan rural municipality|Dhanpalthan Rural Municipality","gramthan rural municipality|Gramthan Rural Municipality","jahada rural municipality|Jahada Rural Municipality","kanepokhari rural municipality|Kanepokhari Rural Municipality","katahari rural municipality|Katahari Rural Municipality","kerabari rural municipality|Kerabari Rural Municipality","letang bhogateni municipality|Letang Bhogateni Municipality","miklajung rural municipality|Miklajung Rural Municipality","pathari-shanischare municipality|Pathari-Shanischare Municipality","rangeli municipality|Rangeli Municipality","ratuwamai municipality|Ratuwamai Municipality","sundar haraincha municipality|Sundar Haraincha Municipality","urlabari municipality|Urlabari Municipality"];
  }
  else if(s3.value == "okhaldhunga"){
    var optionArray = ["Select Local Level|Select Local Level","champadevi rural municipality|Champadevi Rural Municipality","chisankhugadhi rural municipality|Chisankhugadhi Rural Municipality","khiji demba rural municipality|Khiji Demba Rural Municipality","likhu rural municipality|Likhu Rural Municipality","manebhanjyang rural municipality|Manebhanjyang Rural Municipality","molung rural municipality|Molung Rural Municipality","siddhicharan municipality|Siddhicharan Municipality","sunkoshi rural municipality|Sunkoshi Rural Municipality"];
  }
  else if(s3.value == "panchthar"){
    var optionArray = ["Select Local Level|Select Local Level","hilihang rural municipality|Hilihang Rural Municipality","kummayak rural municipality|Kummayak Rural Municipality","miklajung rural municipality|Miklajung Rural Municipality","phalelung rural municipality|Phalelung Rural Municipality","phalgunanda rural municipality|Phalgunanda Rural Municipality","phidim municipality|Phidim Municipality","tumbewa rural municipality|Tumbewa Rural Municipality","yangwarak rural municipality|Yangwarak Rural Municipality"];
  }
  else if(s3.value == "solukhumbu"){
    var optionArray = ["Select Local Level|Select Local Level","khumbu pasang lhamu rural municipality|Khumbu Pasang Lhamu Rural Municipality","likhu pike rural municipality|Likhu Pike Rural Municipality","maha kulung rural municipality|Maha Kulung Rural Municipality","mapya dudhkoshi rural municipality|Mapya Dudhkoshi Rural Municipality","necha salyan rural municipality|Necha Salyan Rural Municipality","solu dudhkunda municipality|Solu Dudhkunda Municipality","sotang rural municipality|Sotang Rural Municipality","thulung dudhkoshi rural municipality|Thulung Dudhkoshi Rural Municipality"];
  }
  else if(s3.value == "sankhuwasabha"){
    var optionArray = ["Select Local Level|Select Local Level","bhot khola rural municipality|Bhot Khola Rural Municipality","chainpur municipality|Chainpur Municipality","chichila Rural Municipality|Chichila Rural Municipality","dharmadevi municipality|Dharmadevi Municipality","khandbari municipality|Khandbari Municipality","madi municipality|Madi Municipality","makalu rural municipality|Makalu Rural Municipality","panchkhapan municipality|Panchkhapan Municipality","sabhapokhari rural municipality|Sabhapokhari Rural Municipality","silichong rural municipality|Silichong Rural Municipality"];
  }
  else if(s3.value == "sunsari"){
    var optionArray = ["Select Local Level|Select Local Level","barahachhetra municipality|Barahachhetra Municipality","barju rural municipality|Barju Rural Municipality","bhokraha narsingh rural municipality|Bhokraha Narsingh Rural Municipality","dewanganj rural municipality|Dewanganj Rural Municipality","dharan sub-metropolitan city|Dharan Sub-Metropolitan City","duhabi municipality|Duhabi Municipality","gadhi rural municipality|Gadhi Rural Municipality","harinagar rural municipality|Harinagar Rural Municipality","inaruwa municipality|Inaruwa Municipality","itahari sub-metropolitan City|Itahari Sub-Metropolitan City","koshi rural municipality|Koshi Rural Municipality","ramdhuni municipality|Ramdhuni Municipality"];
  }
  else if(s3.value == "taplejung"){
    var optionArray = ["Select Local Level|Select Local Level","aathrai triveni rural municipality|Aathrai Triveni Rural Municipality","maiwa khola rural municipality|Maiwa Khola Rural Municipality","meringden rural municipality|Meringden Rural Municipality","mikwa khola rural municipality|Mikwa Khola Rural Municipality","pathibhara yangwarak rural municipality|Pathibhara Yangwarak Rural Municipality","phaktanglung rural municipality|Phaktanglung Rural Municipality","sidingwa rural municipality|Sidingwa Rural Municipality","sirijangha rural municipality|Sirijangha Rural Municipality","taplejung(phungling) municipality|Taplejung(Phungling) Municipality"];
  }
  else if(s3.value == "terhathum"){
    var optionArray = ["Select Local Level|Select Local Level","aathrai rural municipality|Aathrai Rural Municipality","chhathar rural municipality|Chhathar Rural Municipality","laligurans municipality|Laligurans Municipality","menchayayem rural municipality|Menchayayem Rural Municipality","myanglung municipality|Myanglung Municipality","phedap rural municipality|Phedap Rural Municipality"];
  }
  else if(s3.value == "udayapur"){
    var optionArray = ["Select Local Level|Select Local Level","belaka municipality|Belaka Municipality","chaudandigadhi municipality|Chaudandigadhi Municipality","katari municipality|Katari Municipality","limchungbung rural municipality|Limchungbung Rural Municipality","rautamai rural municipality|Rautamai Rural Municipality","tapli rural municipality|Tapli Rural Municipality","triyuga municipality|Triyuga Municipality","udayapurgadhi rural municipality|Udayapurgadhi Rural Municipality"];
  }
  else if(s3.value == "bara"){
    var optionArray = ["Select Local Level|Select Local Level","adarsha kotwal rural municipality|Adarsha Kotwal Rural Municipality","baragadhi rural municipality|Baragadhi Rural Municipality","bishrampur rural municipality|Bishrampur Rural Municipality","devtal rural municipality|Devtal Rural Municipality","jitpur simara sub-metropolitan city|Jitpur Simara Sub-metropolitan City","kalaiya sub-metropolitan city|Kalaiya Sub-metropolitan City","karaiyamai rural municipality|Karaiyamai Rural Municipality","kolhabi municipality|Kolhabi Municipality","mahagadhimai municipality|Mahagadhimai Municipality","nijgadh municipality|Nijgadh Municipality","pachrauta municipality|Pachrauta Municipality","parawanipur rural municipality|Parawanipur Rural Municipality","pheta rural municipality|Pheta Rural Municipality","prasauni rural municipality|Prasauni Rural Municipality","simraungadh municipality|Simraungadh Municipality","subarna rural municipality|Subarna Rural Municipality"];
  }
  else if(s3.value == "dhanusha"){
    var optionArray = ["Select Local Level|Select Local Level","aaurahi rural municipality|Aaurahi Rural Municipality","bateshwar rural municipality|Bateshwar Rural Municipality","bideha municipality|Bideha Municipality","dhanauji rural municipality|Dhanauji Rural Municipality","dhanushadham municipality|Dhanushadham Municipality","ganeshman charnath municipality|Ganeshman Charnath Municipality","hansapur municipality|Hansapur Municipality","janak nandini rural municipality|Janak Nandini Rural Municipality","janakpurdham sub-metropolitan city|Janakpurdham Sub-Metropolitan City","kamala municipality|Kamala Municipality","kshireshwarnath municipality|Kshireshwarnath Municipality","laksminiya rural municipality|Laksminiya Rural Municipality","mithila bihari municipality|Mithila Bihari Municipality","mithila municipality|Mithila Municipality","mukhiyapatti musaharmiya rural municipality|Mukhiyapatti Musaharmiya Rural Municipality","nagarain municipality|Nagarain Municipality","sabaila municipality|Sabaila Municipality","shahidnagar municipality|Shahidnagar Municipality"];
  }
  else if(s3.value == "mahottari"){
    var optionArray = ["Select Local Level|Select Local Level","aurahi municipality|Aurahi Municipality","balawa municipality|Balawa Municipality","bardibas municipality|Bardibas Municipality","bhangaha municipality|Bhangaha Municipality","ekdara rural municipality|Ekdara Rural Municipality","gaushala municipality|Gaushala Municipality","jaleshwar municipality|Jaleshwar Municipality","loharpatti municipality|Loharpatti Municipality","mahottari rural municipality|Mahottari Rural Municipality","manara shisawa municipality|Manara Shisawa Municipality","matihani municipality|Matihani Municipality","pipara rural municipality|Pipara Rural Municipality","ramgopalpur municipality|Ramgopalpur Municipality","samsi rural municipality|Samsi Rural Municipality","sonama rural municipality|Sonama Rural Municipality"];
  }
  else if(s3.value == "parsa"){
    var optionArray = ["Select Local Level|Select Local Level","bahudarmai municipality|Bahudarmai Municipality","bindabasini rural municipality|Bindabasini Rural Municipality","birganj metopolitan city|Birganj Metopolitan City","chhipaharmai rural municipality|Chhipaharmai Rural Municipality","dhobini rural municipality|Dhobini Rural Municipality","jagarnathpur rural municipality|Jagarnathpur Rural Municipality","jira bhavani rural municipality|Jira Bhavani Rural Municipality","kalikamai rural municipality|Kalikamai Rural Municipality","pakaha mainpur rural municipality|Pakaha Mainpur Rural Municipality","parsagadhi municipality|Parsagadhi Municipality","paterwa sugauli rural municipality|Paterwa Sugauli Rural Municipality","pokhariya municipality|Pokhariya Municipality","sakhuwa prasauni rural municipality|Sakhuwa Prasauni Rural Municipality","thori rural municipality|Thori Rural Municipality"];
  }
  else if(s3.value == "rautahat"){
    var optionArray = ["Select Local Level|Select Local Level","baudhimai municipality|Baudhimai Municipality","brindaban municipality|Brindaban Municipality","chandrapur municipality|Chandrapur Municipality","dewahi gonahi municipality|Dewahi Gonahi Municipality","durga bhagawati rural municipality|Durga Bhagawati Rural Municipality","gadhimai municipality|Gadhimai Municipality","garuda municipality|Garuda Municipality","gaur municipality|Gaur Municipality","gujara municipality|Gujara Municipality","ishnath municipality|Ishnath Municipality","katahariya municipality|Katahariya Municipality","madhav narayan municipality|Madhav Narayan Municipality","maulapur municipality|Maulapur Municipality","paroha municipality|Paroha Municipality","phatuwa bijayapur municipality|Phatuwa Bijayapur Municipality","rajdevi municipality|Rajdevi Municipality","rajpur municipality|Rajpur Municipality","yamunamai rural municipality|Yamunamai Rural Municipality"];
  }
  else if(s3.value == "saptari"){
    var optionArray = ["Select Local Level|Select Local Level","aagnisaira krishnasawaran rural municipality|Aagnisaira Krishnasawaran Rural Municipality","balan-bihul rural municipality|Balan-Bihul Rural Municipality","bishnupur rural municipality|Bishnupur Rural Municipality","bodebarsain municipality|Bodebarsain Municipality","chhinnamasta rural municipality|Chhinnamasta Rural Municipality","dakneshwari municipality|Dakneshwari Municipality","hanumannagar kankalini municipality|Hanumannagar Kankalini Municipality","kanchanrup municipality|Kanchanrup Municipality","khadak municipality|Khadak Municipality","mahadeva rural municipality|Mahadeva Rural Municipality","rajbiraj municipality|Rajbiraj Municipality","rajgadh rural municipality|Rajgadh Rural Municipality","rupani rural municipality|Rupani Rural Municipality","saptakoshi municipality|Saptakoshi Municipality","shambhunath municipality|Shambhunath Municipality","surunga municipality|Surunga Municipality","tilathi koiladi rural municipality|Tilathi Koiladi Rural Municipality","tirhut rural municipality|Tirhut Rural Municipality"];
  }
  else if(s3.value == "sarlahi"){
    var optionArray = ["Select Local Level|Select Local Level","bagmati municipality|Bagmati Municipality","balara municipality|Balara Municipality","barahathwa municipality|Barahathwa Municipality","basbariya rural municipality|Basbariya Rural Municipality","bishnu rural municipality|Bishnu Rural Municipality","bramhapuri rural municipality|Bramhapuri Rural Municipality","chakraghatta rural municipality|Chakraghatta Rural Municipality","chandranagar rural municipality|Chandranagar Rural Municipality","dhankaul rural municipality|Dhankaul Rural Municipality","godaita municipality|Godaita Municipality","haripur municipality|Haripur Municipality","haripurwa municipality|Haripurwa Municipality","hariwan municipality|Hariwan Municipality","ishwarpur municipality|Ishwarpur Municipality","kabilasi municipality|Kabilasi Municipality","kaudena rural municipality|Kaudena Rural Municipality","lalbandi municipality|Lalbandi Municipality","malangwa municipality|Malangwa Municipality","parsa rural municipality|Parsa Rural Municipality","ramnagar rural municipality|Ramnagar Rural Municipality"];
  }
  else if(s3.value == "siraha"){
    var optionArray = ["Select Local Level|Select Local Level","aaurahi rural municipality|Aaurahi Rural Municipality","arnama rural municipality|Arnama Rural Municipality","bariyarpatti rural municipality|Bariyarpatti Rural Municipality","bhagawanpur rural municipality|Bhagawanpur Rural Municipality","bishnupur rural municipality|Bishnupur Rural Municipality","dhangadimai municipality|Dhangadimai Municipality","golbazar municipality|Golbazar Municipality","kalyanpur municipality|Kalyanpur Municipality","karjanha municipality|Karjanha Municipality","lahan municipality|Lahan Municipality","laksmipur patari rural municipality|Laksmipur Patari Rural Municipality","mirchaiya municipality|Mirchaiya Municipality","naraha rural municipality|Naraha Rural Municipality","nawarajpur rural municipality|Nawarajpur Rural Municipality","sakhuwanankarkatti rural municipality|Sakhuwanankarkatti Rural Municipality","siraha municipality|Siraha Municipality","sukhipur municipality|Sukhipur Municipality"];
  }
  else if(s3.value == "bhaktapur"){
    var optionArray = ["Select Local Level|Select Local Level","bhaktapur municipality|Bhaktapur Municipality","changunarayan municipality|Changunarayan Municipality","madhyapur thimi municipality|Madhyapur Thimi Municipality","suryabinayak municipality|Suryabinayak Municipality"];
  }
  else if(s3.value == "chitwan"){
    var optionArray = ["Select Local Level|Select Local Level","bharatpur metopolitan city|Bharatpur Metopolitan City","ichchhakamana rural municipality|Ichchhakamana Rural Municipality","kalika municipality|Kalika Municipality","khairhani municipality|Khairhani Municipality","madi municipality|Madi Municipality","rapti municipality|Rapti Municipality","ratnanagar municipality|Ratnanagar Municipality"];
  }
  else if(s3.value == "dhading"){
    var optionArray = ["Select Local Level|Select Local Level","benighat rorang rural municipality|Benighat Rorang Rural Municipality","dhunibeshi municipality|Dhunibeshi Municipality","gajuri rural municipality|Gajuri Rural Municipality","galchhi rural municipality|Galchhi Rural Municipality","gangajamuna rural municipality|Gangajamuna Rural Municipality","jwalamukhi rural municipality|Jwalamukhi Rural Municipality","khaniyabas rural municipality|Khaniyabas Rural Municipality","netrawati dabjong rural municipality|Netrawati Dabjong Rural Municipality","nilkantha municipality|Nilkantha Municipality","ruby valley rural municipality|Ruby Valley Rural Municipality","siddhalekh rural municipality|Siddhalekh Rural Municipality","thakre rural municipality|Thakre Rural Municipality","tripura sundari rural municipality|Tripura Sundari Rural Municipality"];
  }
  else if(s3.value == "dolakha"){
    var optionArray = ["Select Local Level|Select Local Level","baiteshwar rural municipality|Baiteshwar Rural Municipality","bhimeshwar municipality|Bhimeshwar Municipality","bigu rural municipality|Bigu Rural Municipality","gaurishankar rural municipality|Gaurishankar Rural Municipality","jiri municipality|Jiri Municipality","kalinchok rural municipality|Kalinchok Rural Municipality","melung rural municipality|Melung Rural Municipality","shailung rural municipality|Shailung Rural Municipality","tamakoshi rural municipality|Tamakoshi Rural Municipality"];
  }
  else if(s3.value == "kathmandu"){
    var optionArray = ["Select Local Level|Select Local Level","budhanilkantha municipality|Budhanilkantha Municipality","chandragiri municipality|Chandragiri Municipality","dakshinkali municipality|Dakshinkali Municipality","gokarneshwar municipality|Gokarneshwar Municipality","kageshwari-manohara municipality|Kageshwari-Manohara Municipality","kathmandu metopolitan city|Kathmandu Metopolitan City","kirtipur municipality|Kirtipur Municipality","nagarjun municipality|Nagarjun Municipality","shankharapur municipality|Shankharapur Municipality"];
  }
  else if(s3.value == "kavrepalanchok"){
    var optionArray = ["Select Local Level|Select Local Level","banepa municipality|Banepa Municipality","bethanchok rural municipality|Bethanchok Rural Municipality","bhumlu rural municipality|Bhumlu Rural Municipality","chaunri deurali rural municipality|Chaunri Deurali Rural Municipality","dhulikhel municipality|Dhulikhel Municipality","khanikhola rural municipality|Khanikhola Rural Municipality","mahabharat rural municipality|Mahabharat Rural Municipality","mandandeupur municipality|Mandandeupur Municipality","namobuddha municipality|Namobuddha Municipality","panchkhal municipality|Panchkhal Municipality","paunauti municipality|Paunauti Municipality","roshi rural municipality|Roshi Rural Municipality","temal rural municipality|Temal Rural Municipality"];
  }
  else if(s3.value == "lalitpur"){
    var optionArray = ["Select Local Level|Select Local Level","bagmati rural municipality|Bagmati Rural Municipality","godawari municipality|Godawari Municipality","konjyosom rural municipality|Konjyosom Rural Municipality","lalitpur metopolitan city|Lalitpur Metopolitan City","mahalaxmi municipality|Mahalaxmi Municipality","mahankal rural municipality|Mahankal Rural Municipality"];
  }
  else if(s3.value == "makwanpur"){
    var optionArray = ["Select Local Level|Select Local Level","bagmati rural municipality|Bagmati Rural Municipality","bakaiya rural municipality|Bakaiya Rural Municipality","bhimphedi rural municipality|Bhimphedi Rural Municipality","hetauda sub-metropolitan city|Hetauda Sub-metropolitan City","indrasarowar rural municipality|Indrasarowar Rural Municipality","kailash rural municipality|Kailash Rural Municipality","makawanpurgadhi rural municipality|Makawanpurgadhi Rural Municipality","manhari rural mmunicipality|Manhari Rural Municipality","raksirang rural Mmunicipality|Raksirang Rural Municipality","thaha municipality|Thaha Municipality"];
  }
  else if(s3.value == "nuwakot"){
    var optionArray = ["Select Local Level|Select Local Level","belkotgadhi municipality|Belkotgadhi Municipality","bidur municipality|Bidur Municipality","dupcheshwar rural municipality|Dupcheshwar Rural Municipality","kakani rural municipality|Kakani Rural Municipality","kispang rural municipality|Kispang Rural Municipality","likhu rural municipality|Likhu Rural Municipality","myagang rural municipality|Myagang Rural Municipality","panchakanya rural municipality|Panchakanya Rural Municipality","shivapuri rural municipality|Shivapuri Rural Municipality","suryagadhi rural municipality|Suryagadhi Rural Municipality","tadi rural municipality|Tadi Rural Municipality","tarkeshwar rural municipality|Tarkeshwar Rural Municipality"];
  }
  else if(s3.value == "ramechhap"){
    var optionArray = ["Select Local Level|Select Local Level","doramba rural municipality|Doramba Rural Municipality","gokulganga rural municipality|Gokulganga Rural Municipality","khandadevi rural municipality|Khandadevi Rural Municipality","likhu tamakoshi rural municipality|Likhu Tamakoshi Rural Municipality","manthali municipality|Manthali Municipality","ramechhap municipality|Ramechhap Municipality","sunapati rural municipality|Sunapati Rural Municipality","umakunda rural municipality|Umakunda Rural Municipality"];
  }
  else if(s3.value == "rasuwa"){
    var optionArray = ["Select Local Level|Select Local Level","aamachodingmo rural municipality|Aamachodingmo Rural Municipality","gosaikund rural municipality|Gosaikund Rural Municipality","kalika rural municipality|Kalika Rural Municipality","naukunda rural municipality|Naukunda Rural Municipality","uttargaya rural municipality|Uttargaya Rural Municipality"];
  }
  else if(s3.value == "sindhuli"){
    var optionArray = ["Select Local Level|Select Local Level","dudhauli municipality|Dudhauli Municipality","ghyanglekh rural municipality|Ghyanglekh Rural Municipality","golanjor rural municipality|Golanjor Rural Municipality","hariharpurgadhi rural municipality|Hariharpurgadhi Rural Municipality","kamalamai municipality|Kamalamai Municipality","marin rural municipality|Marin Rural Municipality","phikkal rural municipality|Phikkal Rural Municipality","sunkoshi rural municipality|Sunkoshi Rural Municipality","tinpatan rural municipality|Tinpatan Rural Municipality"];
  }
  else if(s3.value == "sindhupalchok"){
    var optionArray = ["Select Local Level|Select Local Level","balephi rural municipality|Balephi Rural Municipality","barhabise municipality|Barhabise Municipality","bhotekoshi rural municipality|Bhotekoshi Rural Municipality","chautara sangachokgadhi municipality|Chautara Sangachokgadhi Municipality","helambu rural municipality|Helambu Rural Municipality","indrawati rural municipality|Indrawati Rural Municipality","jugal rural municipality|Jugal Rural Municipality","lisankhu pakhar rural municipality|Lisankhu Pakhar Rural Municipality","melamchi municipality|Melamchi Municipality","panchpokhari thangpal rural municipality|Panchpokhari Thangpal Rural Municipality","sunkoshi rural municipality|Sunkoshi Rural Municipality","tripura sundari rural municipality|Tripura Sundari Rural Municipality"];
  }
  else if(s3.value == "baglung"){
    var optionArray = ["Select Local Level|Select Local Level","badigad rural municipality|Badigad Rural Municipality","baglung municipality|Baglung Municipality","bareng rural municipality|Bareng Rural Municipality","dhorpatan municipality|Dhorpatan Municipality","galkot municipality|Galkot Municipality","jaimini municipality|Jaimini Municipality","kathekhola rural municipality|Kathekhola Rural Municipality","nisikhola rural municipality|Nisikhola Rural Municipality","tamankhola rural municipality|Tamankhola Rural Municipality","tarakhola rural municipality|Tarakhola Rural Municipality"];
  }
  else if(s3.value == "gorkha"){
    var optionArray = ["Select Local Level|Select Local Level","aarughat rural municipality|Aarughat Rural Municipality","ajirkot rural municipality|Ajirkot Rural Municipality","barpak sulikot rural municipality|Barpak Sulikot Rural Municipality","bhimsen thapa rural municipality|Bhimsen Thapa Rural Municipality","chum nubri rural municipality|Chum Nubri Rural Municipality","dharche rural municipality|Dharche Rural Municipality","gandaki rural municipality|Gandaki Rural Municipality","gorkha municipality|Gorkha Municipality","palungtar municipality|Palungtar Municipality","shahid lakhan rural municipality|Shahid Lakhan Rural Municipality","siranchok rural municipality|Siranchok Rural Municipality"];
  }
  else if(s3.value == "kaski"){
    var optionArray = ["Select Local Level|Select Local Level","annapurna rural municipality|Annapurna Rural Municipality","machhapuchhre rural municipality|Machhapuchhre Rural Municipality","madi rural municipality|Madi Rural Municipality","pokhara metopolitan city|Pokhara Metopolitan City","rupa rural municipality|Rupa Rural Municipality"];
  }
  else if(s3.value == "lamjung"){
    var optionArray = ["Select Local Level|Select Local Level","besisahar municipality|Besisahar Municipality","dordi rural municipality|Dordi Rural Municipality","dudhpokhari rural municipality|Dudhpokhari Rural Municipality","kwaholasothar rural municipality|Kwaholasothar Rural Municipality","madhya nepal municipality|Madhya Nepal Municipality","marsyangdi rural municipality|Marsyangdi Rural Municipality","rainas municipality|Rainas Municipality","sundarbazar municipality|Sundarbazar Municipality"];
  }
  else if(s3.value == "manang"){
    var optionArray = ["Select Local Level|Select Local Level","chame rural municipality|Chame Rural Municipality","manang disyang rural municipality|Manang Disyang Rural Municipality","narpa bhumi rural municipality|Narpa Bhumi Rural Municipality","nason rural municipality|Nason Rural Municipality"];
  }
  else if(s3.value == "mustang"){
    var optionArray = ["Select Local Level|Select Local Level","baragung muktichhetra rural municipality|Baragung Muktichhetra Rural Municipality","gharapjhong rural municipality|Gharapjhong Rural Municipality","lo-ghekar damodarkunda rural municipality|Lo-Ghekar Damodarkunda Rural Municipality","lomanthang rural municipality|Lomanthang Rural Municipality","thasang rural municipality|Thasang Rural Municipality"];
  }
  else if(s3.value == "myagdi"){
    var optionArray = ["Select Local Level|Select Local Level","annapurna rural municipality|Annapurna Rural Municipality","beni municipality|Beni Municipality","dhaulagiri rural municipality|Dhaulagiri Rural Municipality","malika rural municipality|Malika Rural Municipality","mangala rural municipality|Mangala Rural Municipality","raghuganga rural municipality|Raghuganga Rural Municipality"];
  }
  else if(s3.value == "nawalpur"){
    var optionArray = ["Select Local Level|Select Local Level","baudikali rural municipality|Baudikali Rural Municipality","binayi triveni rural municipality|Binayi Triveni Rural Municipality","bulingtar rural municipality|Bulingtar Rural Municipality","devchuli municipality|Devchuli Municipality","gaindakot municipality|Gaindakot Municipality","hupsekot rural municipality|Hupsekot Rural Municipality","kawasoti municipality|Kawasoti Municipality","madhyabindu municipality|Madhyabindu Municipality"];
  }
  else if(s3.value == "parbat"){
    var optionArray = ["Select Local Level|Select Local Level","bihadi rural municipality|Bihadi Rural Municipality","jaljala rural municipality|Jaljala Rural Municipality","kushma municipality|Kushma Municipality","mahashila rural municipality|Mahashila Rural Municipality","modi rural municipality|Modi Rural Municipality","painyu rural municipality|Painyu Rural Municipality","phalewas municipality|Phalewas Municipality"];
  }
  else if(s3.value == "syangja"){
    var optionArray = ["Select Local Level|Select Local Level","aandhikhola rural municipality|Aandhikhola Rural Municipality","arjun chaupari rural municipality|Arjun Chaupari Rural Municipality","bhirkot municipality|Bhirkot Municipality","biruwa rural municipality|Biruwa Rural Municipality","chapakot municipality|Chapakot Municipality","galyang municipality|Galyang Municipality","harinas rural municipality|Harinas Rural Municipality","kaligandaki rural municipality|Kaligandaki Rural Municipality","phedikhola rural municipality|Phedikhola Rural Municipality","putalibazar municipality|Putalibazar Municipality","waling municipality|Waling Municipality"];
  }
  else if(s3.value == "tanahun"){
    var optionArray = ["Select Local Level|Select Local Level","aanbu khaireni rural municipality|Aanbu Khaireni Rural Municipality","bandipur rural municipality|Bandipur Rural Municipality","bhanu municipality|Bhanu Municipality","bhimad municipality|Bhimad Municipality","devghat rural municipality|Devghat Rural Municipality","ghiring rural municipality|Ghiring Rural Municipality","myagde rural municipality|Myagde Rural Municipality","rishing rural municipality|Rishing Rural Municipality","shuklagandaki municipality|Shuklagandaki Municipality","vyas municipality|Vyas Municipality"];
  }
  else if(s3.value == "arghakhanchi"){
    var optionArray = ["Select Local Level|Select Local Level","bhumikasthan municipality|Bhumikasthan Municipality","chhatradev rural municipality|Chhatradev Rural Municipality","malarani rural municipality|Malarani Rural Municipality","pandini rural municipality|Pandini Rural Municipality","sandhikharka municipality|Sandhikharka Municipality","sitganga municipality|Sitganga Municipality"];
  }
  else if(s3.value == "banke"){
    var optionArray = ["Select Local Level|Select Local Level","baijnath rural municipality|Baijnath Rural Municipality","duduwa rural municipality|Duduwa Rural Municipality","janaki rural municipality|Janaki Rural Municipality","khajura rural municipality|Khajura Rural Municipality","kohalpur municipality|Kohalpur Municipality","narainapur rural municipality|Narainapur Rural Municipality","nepalgunj sub-metropolitan city|Nepalgunj Sub-Metropolitan City","raptisonari rural municipality|Raptisonari Rural Municipality"];
  }
  else if(s3.value == "bardiya"){
    var optionArray = ["Select Local Level|Select Local Level","badhaiyatal rural municipality|Badhaiyatal Rural Municipality","bansgadhi municipality|Bansgadhi Municipality","barbardiya municipality|Barbardiya Municipality","geruwa rural municipality|Geruwa Rural Municipality","gulariya municipality|Gulariya Municipality","madhuwan municipality|Madhuwan Municipality","rajapur municipality|Rajapur Municipality","thakurbaba municipality|Thakurbaba Municipality"];
  }
  else if(s3.value == "dang"){
    var optionArray = ["Select Local Level|Select Local Level","babai rural municipality|Babai Rural Municipality","banglachuli rural municipality|Banglachuli Rural Municipality","dangisharan rural municipality|Dangisharan Rural Municipality","gadhawa rural municipality|Gadhawa Rural Municipality","ghorahi sub-metropolitan city|Ghorahi Sub-Metropolitan City","lamahi municipality|Lamahi Municipality","rajpur rural municipality|Rajpur Rural Municipality","rapti rural municipality|Rapti Rural Municipality","shantinagar rural municipality|Shantinagar Rural Municipality","tulsipur sub-metropolitan city|Tulsipur Sub-Metropolitan City"];
  }
  else if(s3.value == "eastern rukum"){
    var optionArray = ["Select Local Level|Select Local Level","bhume rural municipality|Bhume Rural Municipality","putha uttarganga rural municipality|Putha Uttarganga Rural Municipality","sisne rural municipality|Sisne Rural Municipality"];
  }
  else if(s3.value == "gulmi"){
    var optionArray = ["Select Local Level|Select Local Level","chandrakot rural municipality|Chandrakot Rural Municipality","chhatrakot rural municipality|Chhatrakot Rural Municipality","dhurkot rural municipality|Dhurkot Rural Municipality","gulmi durbar rural municipality|Gulmi Durbar Rural Municipality","isma rural municipality|Isma Rural Municipality","kaligandaki rural municipality|Kaligandaki Rural Municipality","madane rural municipality|Madane Rural Municipality","malika rural municipality|Malika Rural Municipality","musikot municipality|Musikot Municipality","resunga municipality|Resunga Municipality","rurukshetra rural municipality|Rurukshetra Rural Municipality","satyawati rural municipality|Satyawati Rural Municipality"];
  }
  else if(s3.value == "kapilvastu"){
    var optionArray = ["Select Local Level|Select Local Level","banganga municipality|Banganga Municipality","bijaynagar rural municipality|Bijaynagar Rural Municipality","buddhabhumi municipality|Buddhabhumi Municipality","kapilvastu municipality|Kapilvastu Municipality","krishnanagar municipality|Krishnanagar Municipality","maharajganj municipality|Maharajganj Municipality","mayadevi rural municipality|Mayadevi Rural Municipality","shivaraj municipality|Shivaraj Municipality","shuddhodhan rural municipality|Shuddhodhan Rural Municipality","yasodhara rural municipality|Yasodhara Rural Municipality"];
  }
  else if(s3.value == "palpa"){
    var optionArray = ["Select Local Level|Select Local Level","bagnaskali rural municipality|Bagnaskali Rural Municipality","mathagadhi rural municipality|Mathagadhi Rural Municipality","nisdi rural municipality|Nisdi Rural Municipality","purbakhola rural municipality|Purbakhola Rural Municipality","rainadevi chhahara rural municipality|Rainadevi Chhahara Rural Municipality","rambha rural municipality|Rambha Rural Municipality","rampur municipality|Rampur Municipality","ribdikot rural municipality|Ribdikot Rural Municipality","tansen municipality|Tansen Municipality","tinau rural municipality|Tinau Rural Municipality"];
  }
  else if(s3.value == "parasi"){
    var optionArray = ["Select Local Level|Select Local Level","bardghat municipality|Bardghat Municipality","palhi nandan rural municipality|Palhi Nandan Rural Municipality","pratappur rural municipality|Pratappur Rural Municipality","ramgram municipality|Ramgram Municipality","sarawal rural municipality|Sarawal Rural Municipality","sunwal municipality|Sunwal Municipality","triveni susta rural municipality|Triveni Susta Rural Municipality"];
  }
  else if(s3.value == "pyuthan"){
    var optionArray = ["Select Local Level|Select Local Level","airawati rural municipality|Airawati Rural Municipality","gaumukhi rural municipality|Gaumukhi Rural Municipality","jhimaruk rural municipality|Jhimaruk Rural Municipality","mallarani rural municipality|Mallarani Rural Municipality","mandavi rural municipality|Mandavi Rural Municipality","naubahini rural municipality|Naubahini Rural Municipality","pyuthan municipality|Pyuthan Municipality","Sarumarani rural municipality|Sarumarani Rural Municipality","swargadwari municipality|Swargadwari Municipality"];
  }
  else if(s3.value == "rolpa"){
    var optionArray = ["Select Local Level|Select Local Level","gangadev rural municipality|Gangadev Rural Municipality","lungri rural municipality|Lungri Rural Municipality","madi rural municipality|Madi Rural Municipality","paribartan rural municipality|Paribartan Rural Municipality","rolpa municipality|Rolpa Municipality","runtigadhi rural municipality|Runtigadhi Rural Municipality","sunchhahari rural municipality|Sunchhahari Rural Municipality","sunil smriti rural municipality|Sunil Smriti Rural Municipality","thawang rural municipality|Thawang Rural Municipality","triveni rural municipality|Triveni Rural Municipality"];
  }
  else if(s3.value == "rupandehi"){
    var optionArray = ["Select Local Level|Select Local Level","butwal sub-metropolitan city|Butwal Sub-metropolitan City","devdaha municipality|Devdaha Municipality","gaidhawa rural municipality|Gaidhawa Rural Municipality","kanchan rural municipality|Kanchan Rural Municipality","kotahimai rural municipality|Kotahimai Rural Municipality","lumbini sanskritik municipality|Lumbini Sanskritik Municipality","marchawarimai rural municipality|Marchawarimai Rural Municipality","mayadevi rural municipality|Mayadevi Rural Municipality","om satiya rural municipality|Om Satiya Rural Municipality","rohini rural municipality|Rohini Rural Municipality","sainamaina municipality|Sainamaina Municipality","sammarimai rural municipality|Sammarimai Rural Municipality","shuddhodhan rural municipality|Shuddhodhan Rural Municipality","siddharthanagar municipality|Siddharthanagar Municipality","siyari rural municipality|Siyari Rural Municipality","tilottama municipality|Tilottama Municipality"];
  }
  else if(s3.value == "dailekh"){
    var optionArray = ["Select Local Level|Select Local Level","aathabis municipality|Aathabis Municipality","bhagawatimai rural municipality|Bhagawatimai Rural Municipality","bhairabi rural municipality|Bhairabi Rural Municipality","chamunda bindrasaini municipality|Chamunda Bindrasaini Municipality","dullu municipality|Dullu Municipality","dungeshwar rural municipality|Dungeshwar Rural Municipality","gurans rural municipality|Gurans Rural Municipality","mahabu rural municipality|Mahabu Rural Municipality","narayan municipality|Narayan Municipality","naumule rural municipality|Naumule Rural Municipality","thantikandh rural municipality|Thantikandh Rural Municipality"];
  }
  else if(s3.value == "dolpa"){
    var optionArray = ["Select Local Level|Select Local Level","chharka tangsong rural municipality|Chharka Tangsong Rural Municipality","dolpo buddha rural municipality|Dolpo Buddha Rural Municipality","jagadulla rural municipality|Jagadulla Rural Municipality","kaike rural municipality|Kaike Rural Municipality","mudkechula rural municipality|Mudkechula Rural Municipality","she phoksundo rural municipality|She Phoksundo Rural Municipality","thuli bheri municipality|Thuli Bheri Municipality","tripura sundari municipality|Tripura Sundari Municipality"];
  }
  else if(s3.value == "humla"){
    var optionArray = ["Select Local Level|Select Local Level","adanchuli rural municipality|Adanchuli Rural Municipality","chankheli rural municipality|Chankheli Rural Municipality","kharpunath rural municipality|Kharpunath Rural Municipality","namkha rural municipality|Namkha Rural Municipality","sarkegad rural municipality|Sarkegad Rural Municipality","simkot rural municipality|Simkot Rural Municipality","tanjakot rural municipality|Tanjakot Rural Municipality"];
  }
  else if(s3.value == "jajarkot"){
    var optionArray = ["Select Local Level|Select Local Level","barekot rural municipality|Barekot Rural Municipality","bheri municipality|Bheri Municipality","chhedagad municipality|Chhedagad Municipality","junichande rural municipality|Junichande Rural Municipality","kushe rural municipality|Kushe Rural Municipality","nalgad municipality|Nalgad Municipality","shivalaya rural municipality|Shivalaya Rural Municipality"];
  }
  else if(s3.value == "jumla"){
    var optionArray = ["Select Local Level|Select Local Level","chandannath municipality|Chandannath Municipality","guthichaur rural municipality|Guthichaur Rural Municipality","hima rural municipality|Hima Rural Municipality","kanaka sundari rural municipality|Kanaka Sundari Rural Municipality","patarasi rural municipality|Patarasi Rural Municipality","sinja rural municipality|Sinja Rural Municipality","tatopani rural municipality|Tatopani Rural Municipality","tila rural municipality|Tila Rural Municipality"];
  }
  else if(s3.value == "kalikot"){
    var optionArray = ["Select Local Level|Select Local Level","khandachakra municipality|Khandachakra Municipality","mahawai rural municipality|Mahawai Rural Municipality","narharinath rural municipality|Narharinath Rural Municipality","pachaljharana rural municipality|Pachaljharana Rural Municipality","palata rural municipality|Palata Rural Municipality","raskot municipality|Raskot Municipality","sanni triveni rural municipality|Sanni Triveni Rural Municipality","shubha kalika rural municipality|Shubha Kalika Rural Municipality","tilagupha municipality|Tilagupha Municipality"];
  }
  else if(s3.value == "mugu"){
    var optionArray = ["Select Local Level|Select Local Level","chhayanath rara municipality|Chhayanath Rara Municipality","khatyad rural municipality|Khatyad Rural Municipality","mugum karmarong rural municipality|Mugum Karmarong Rural Municipality","soru rural municipality|Soru Rural Municipality"];
  }
  else if(s3.value == "salyan"){
    var optionArray = ["Select Local Level|Select Local Level","bagchaur municipality|Bagchaur Municipality","bangad kupinde municipality	|Bangad Kupinde Municipality","chhatreshwari rural municipality|Chhatreshwari Rural Municipality","darma rural municipality|Darma Rural Municipality","kalimati rural municipality|Kalimati Rural Municipality","kapurkot rural municipality|Kapurkot Rural Municipality","kumakh rural municipality|Kumakh Rural Municipality","shaarda municipality|Shaarda Municipality","siddha kumakh rural municipality|Siddha Kumakh Rural Municipality","triveni rural municipality|Triveni Rural Municipality"];
  }
  else if(s3.value == "surkhet"){
    var optionArray = ["Select Local Level|Select Local Level","barahatal rural municipality|Barahatal Rural Municipality","bheriganga municipality|Bheriganga Municipality","birendranagar municipality|Birendranagar Municipality","chaukune rural municipality|Chaukune Rural Municipality","chingad rural municipality|Chingad Rural Municipality","gurbhakot municipality|Gurbhakot Municipality","lekbeshi municipality|Lekbeshi Municipality","panchapuri municipality|Panchapuri Municipality","simta rural municipality|Simta Rural Municipality"];
  }
  else if(s3.value == "western rukum"){
    var optionArray = ["Select Local Level|Select Local Level","aathabiskot municipality|Aathabiskot Municipality","banphikot rural municipality|Banphikot Rural Municipality","chaurjahari municipality|Chaurjahari Municipality","musikot municipality|Musikot Municipality","sani bheri rural municipality|Sani Bheri Rural Municipality","triveni rural municipality|Triveni Rural Municipality"];
  }
  else if(s3.value == "achham"){
    var optionArray = ["Select Local Level|Select Local Level","bannigadi jayagad rural municipality|Bannigadi Jayagad Rural Municipality","chaurpati rural municipality|Chaurpati Rural Municipality","dhankari rural municipality|Dhankari Rural Municipality","kamalbazar municipality|Kamalbazar Municipality","mangalsen municipality|Mangalsen Municipality","mellekh rural municipality|Mellekh Rural Municipality","panchadewal binayak municipality|Panchadewal Binayak Municipality","ramaroshan rural municipality|Ramaroshan Rural Municipality","sanphebagar municipality|Sanphebagar Municipality","turmakhand rural municipality|Turmakhand Rural Municipality"];
  }
  else if(s3.value == "baitadi"){
    var optionArray = ["Select Local Level|Select Local Level","dasharathchand municipality|Dasharathchand Municipality","dilashaini rural municipality|Dilashaini Rural Municipality","dogdakedar rural municipality|Dogdakedar Rural Municipality","melauli municipality|Melauli Municipality","pancheshwar rural municipality|Pancheshwar Rural Municipality","patan municipality|Patan Municipality","purchaundi municipality|Purchaundi Municipality","shivanath rural municipality|Shivanath Rural Municipality","sigas rural municipality|Sigas Rural Municipality","surnaya rural municipality|Surnaya Rural Municipality"];
  }
  else if(s3.value == "bajhang"){
    var optionArray = ["Select Local Level|Select Local Level","bitthadchir rural municipality|Bitthadchir Rural Municipality","bungal municipality|Bungal Municipality","chhabis pathibhera rural municipality|Chhabis Pathibhera Rural Municipality","chhanna rural municipality|Chhanna Rural Municipality","durgathali rural municipality|Durgathali Rural Municipality","jaya prithvi municipality|Jaya Prithvi Municipality","kedarsyu rural municipality|Kedarsyu Rural Municipality","masta rural municipality|Masta Rural Municipality","saipal rural municipality|Saipal Rural Municipality","surma rural municipality|Surma Rural Municipality","talkot rural municipality|Talkot Rural Municipality","thalara rural municipality|Thalara Rural Municipality"];
  }
  else if(s3.value == "bajura"){
    var optionArray = ["Select Local Level|Select Local Level","badimalika municipality|Badimalika Municipality","budhiganga municipality|Budhiganga Municipality","budhinanda municipality|Budhinanda Municipality","gaumul rural municipality|Gaumul Rural Municipality","himali rural municipality|Himali Rural Municipality","jagannath rural municipality|Jagannath Rural Municipality","khaptad chhededaha rural municipality|Khaptad Chhededaha Rural Municipality","swami kartik khapar rural municipality|Swami Kartik Khapar Rural Municipality","tribeni municipality|Tribeni Municipality"];
  }
  else if(s3.value == "dadeldhura"){
    var optionArray = ["Select Local Level|Select Local Level","api himal rural municipality|Api Himal Rural Municipality","duhu rural municipality|Duhu Rural Municipality","lekam rural municipality|Lekam Rural Municipality","mahakali municipality|Mahakali Municipality","malikarjun rural municipality|Malikarjun Rural Municipality","marma rural municipality|Marma Rural Municipality","naugad rural municipality|Naugad Rural Municipality","shailyashikhar municipality|Shailyashikhar Municipality","vyans rural municipality|Vyans Rural Municipality"];
  }
  else if(s3.value == "doti"){
    var optionArray = ["Select Local Level|Select Local Level","aadarsha rural municipality|Aadarsha Rural Municipality","badikedar rural municipality|Badikedar Rural Municipality","bogatan-phudsil rural municipality|Bogatan-Phudsil Rural Municipality","dipayal silgadhi municipality|Dipayal Silgadhi Municipality","jorayal rural municipality|Jorayal Rural Municipality","k.i. singh rural municipality|K.I. Singh Rural Municipality","purbichauki rural municipality|Purbichauki Rural Municipality","sayal rural municipality|Sayal Rural Municipality","shikhar municipality|Shikhar Municipality"];
  }
  else if(s3.value == "kailali"){
    var optionArray = ["Select Local Level|Select Local Level","bardagoriya rural municipality|Bardagoriya Rural Municipality","bhajani municipality|Bhajani Municipality","chure rural municipality|Chure Rural Municipality Rural Municipality","dhangadhi sub-metropolitan city|Dhangadhi Sub-metropolitan City","gauriganga municipality|Gauriganga Municipality","ghodaghodi municipality|Ghodaghodi Municipality","godawari municipality|Godawari Municipality","janaki rural municipality|Janaki Rural Municipality","joshipur rural municipality|Joshipur Rural Municipality","kailari rural municipality|Kailari Rural Municipality","lamki chuha municipality|Lamki Chuha Municipality","mohanyal rural municipality|Mohanyal Rural Municipality","tikapur municipality|Tikapur Municipality"];
  }
  else if(s3.value == "kanchanpur"){
    var optionArray = ["Select Local Level|Select Local Level","bedkot municipality|Bedkot Municipality","beldandi rural municipality|Beldandi Rural Municipality","bhimdatta municipality|Bhimdatta Municipality","krishnapur municipality|Krishnapur Municipality","laljhadi rural municipality|Laljhadi Rural Municipality","mahakali municipality|Mahakali Municipality","punarbas municipality|Punarbas Municipality","shuklaphanta municipality|Shuklaphanta Municipality"];
  }

  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s4.options.add(newOption);
  }
}
