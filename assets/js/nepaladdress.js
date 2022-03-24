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
    var optionArray = ["Select Local Level|Select Local Level","aamchok rural municipality|Aamchok Rural Municipality","arun rural |Gokerneshwor Nagarpalika"];
  }
  else if(s3.value == "dhankuta"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "ilam"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "jhapa"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "khotang"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "morang"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "okhaldhunga"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "panchthar"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "sankhuwasabha"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "solukhumbu"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "sunsari"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "taplejung"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "terhathum"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }
  else if(s3.value == "udayapur"){
    var optionArray = ["Select Local Level|Select Local Level","bara|Bara"];
  }

  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s4.options.add(newOption);
  }
}