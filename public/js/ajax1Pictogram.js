let myRequest;
let myRequest1;
let responseData;
const speech = new SpeechSynthesisUtterance();

getData("/api/get/category");

/* Requête Category */
// function getData(url) {
//   myRequest = new XMLHttpRequest();
//   myRequest.onreadystatechange = getResponse;
//   myRequest.open("GET", url);
//   myRequest.setRequestHeader("content-type", "application-json");
//   myRequest.send();
// }

async function getData(url) {
  try {
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
}

/* end Requête Category */

/* Réponse Category */
// function getResponse() {
//   try {
//     if (myRequest.readyState === XMLHttpRequest.DONE) {
//       switch (myRequest.status) {
//         case 500:
//           break;
//         case 404:
//           break;
//         case 200:
//           responseData = JSON.parse(myRequest.responseText);
//           parcoursJSON(responseData);
//           break;
//       }
//     }
//   } catch (ex) {
//     console.log("Ajax error: " + ex.description);
//   }
// }

async function getData(url) {
  try {
    const response = await fetch(url);
    if (response.ok) {
      const data = await response.json();
      parcoursJSON(data);
    } else {
      console.error(`Error ${response.status}: ${response.statusText}`);
    }
  } catch (error) {
    console.error(error);
  }
}

/* end Réponse Category */

/* Parcours Objets Category */
function parcoursJSON(jsonObj) {
  // Affiche d'abord les catégories les plus utilisées
  $(".contentC").append(
    '<div id="1" class="picto categorie audioC mx-4" title="Sujets" ><img src="/images/categories/sujets.png" alt="Sujet"></div>'
  );
  $(".contentC").append(
    '<div id="3" class="picto categorie audioC mx-4" title="Actions" ><img src="/images/categories/actions.png" alt="Action"></div>'
  );
  $(".contentC").append(
    '<div id="10" class="picto categorie audioC mx-4" title="Petits mots" ><img src="/images/categories/determinants.png" alt="Petits mots"></div>'
  );
  $(".contentC").append(
    '<div id="36" class="picto categorie audioC mx-4" title="Interrogatif" ><img src="/images/categories/interrogatif.png" alt="interrogatif"></div>'
  );
  $(".contentC").append(
    '<div id="4" class="picto categorie audioC mx-4" title="Adjectifs" ><img src="/images/categories/adjectifs.png" alt="Adjectifs"></div>'
  );
  $(".contentC").append(
    '<div id="2" class="picto categorie audioC mx-4" title="Boissons" ><img src="/images/categories/boissons.png" alt="Boissons"></div>'
  );
  $(".contentC").append(
    '<div id="6" class="picto categorie audioC mx-4" title="Animaux" ><img src="/images/categories/animaux.png" alt="Animaux"></div>'
  );
  $(".contentC").append(
    '<div id="5" class="picto categorie audioC mx-4" title="Aliments" ><img src="/images/categories/aliments.png" alt="Aliments"></div>'
  );
  $(".contentC").append(
    '<div id="12" class="picto categorie audioC mx-4" title="Fruits et légumes" ><img src="/images/categories/fruitsEtLegumes.png" alt="Fruits et légumes"></div>'
  );
  $(".contentC").append(
    '<div id="13" class="picto categorie audioC mx-4" title="Langues Des Signes" ><img src="/images/categories/langueDesSignes.png" alt="Langue des signes"></div>'
  );
  $(".contentC").append(
    '<div id="17" class="picto categorie audioC mx-4" title="Objets" ><img src="/images/categories/objets.png" alt="Objets"></div>'
  );
  $(".contentC").append(
    '<div id="18" class="picto categorie audioC mx-4" title="Personnes" ><img src="/images/categories/personnes.png" alt="Personnes"></div>'
  );
  $(".contentC").append(
    '<div id="7" class="picto categorie audioC mx-4" title="Chiffres" ><img src="/images/categories/chiffres.png" alt="Chiffres"></div>'
  );
  $(".contentC").append(
    '<div id="33" class="picto categorie audioC mx-4" title="Jouet" ><img src="/images/categories/jouet.png" alt="Jouet"></div>'
  );
  $(".contentC").append(
    '<div id="26" class="picto categorie audioC mx-4" title="Sports" ><img src="/images/categories/sports.png" alt="Sports"></div>'
  );
  $(".contentC").append(
    '<div id="31" class="picto categorie audioC mx-4" title="Sécurité Routière" ><img src="/images/categories/securiteRoutiere.png" alt="Sécurité Routière"></div>'
  );
  $(".contentC").append(
    '<div id="9" class="picto categorie audioC mx-4" title="Couleurs" ><img src="/images/categories/couleurs.png" alt="Couleurs"></div>'
  );
  $(".contentC").append(
    '<div id="41" class="picto categorie audioC mx-4" title="Couverts" ><img src="/images/categories/couverts.png" alt="Couverts"></div>'
  );
  $(".contentC").append(
    '<div id="8" class="picto categorie audioC mx-4" title="Corps humain" ><img src="/images/categories/corpsHumain.png" alt="Corps humain"></div>'
  );
  $(".contentC").append(
    '<div id="11" class="picto categorie audioC mx-4" title="Émotions" ><img src="/images/categories/emotions.png" alt="Émotions"></div>'
  );
  $(".contentC").append(
    '<div id="14" class="picto categorie audioC mx-4" title="Lieux" ><img src="/images/categories/lieux.png" alt="Lieux"></div>'
  );
  $(".contentC").append(
    '<div id="15" class="picto categorie audioC mx-4" title="Météo" ><img src="/images/categories/meteo.png" alt="Météo"></div>'
  );
  $(".contentC").append(
    '<div id="16" class="picto categorie audioC mx-4" title="Multimédia" ><img src="/images/categories/multimedia.png" alt="multimedia"></div>'
  );
  $(".contentC").append(
    '<div id="19" class="picto categorie audioC mx-4" title="Scolarité" ><img src="/images/categories/scolarite.png" alt="Scolarité"></div>'
  );
  $(".contentC").append(
    '<div id="20" class="picto categorie audioC mx-4" title="Transports" ><img src="/images/categories/transports.png" alt="Transports"></div>'
  );
  $(".contentC").append(
    '<div id="21" class="picto categorie audioC mx-4" title="Vêtements" ><img src="/images/categories/vetements.png" alt="Vêtements"></div>'
  );
  $(".contentC").append(
    '<div id="22" class="picto categorie audioC mx-4" title="Comportements" ><img src="/images/categories/comportements.png" alt="Comportements"></div>'
  );
  $(".contentC").append(
    '<div id="23" class="picto categorie audioC mx-4" title="Orientation" ><img src="/images/categories/orientation.png" alt="Orientation"></div>'
  );
  $(".contentC").append(
    '<div id="24" class="picto categorie audioC mx-4" title="Autres Mots" ><img src="/images/categories/autresMots.png" alt="AutresMots"></div>'
  );
  $(".contentC").append(
    '<div id="25" class="picto categorie audioC mx-4" title="Formes" ><img src="/images/categories/formes.png" alt="Formes"></div>'
  );
  $(".contentC").append(
    '<div id="39" class="picto categorie audioC mx-4" title="Heures" ><img src="/images/categories/heures.png" alt="heures"></div>'
  );
  $(".contentC").append(
    '<div id="37" class="picto categorie audioC mx-4" title="Journee" ><img src="/images/categories/Journee.png" alt="Journee"></div>'
  );

  // Parcourt les objets JSON
  for (let i = 0; i < jsonObj.length; i++) {
    let categorie = jsonObj[i]["name"];
    let imageCategorie = jsonObj[i]["filename"];
    let idCategorie = jsonObj[i]["id"];
    // Evite les catégories affichées précédemment
    if (
      categorie === "Sujets" ||
      categorie === "Actions" ||
      categorie === "Petits mots" ||
      categorie === "Adjectifs" ||
      categorie === "Boissons" ||
      categorie === "Animaux" ||
      categorie === "Aliments" ||
      categorie === "Fruits et légumes" ||
      categorie === "Langues Des Signes" ||
      categorie === "Objets" ||
      categorie === "Chiffres" ||
      categorie === "Jouet" ||
      categorie === "Sports" ||
      categorie === "Couleurs" ||
      categorie === "Corps humain" ||
      categorie === "Émotions" ||
      categorie === "Lieux" ||
      categorie === "Météo" ||
      categorie === "Scolarité" ||
      categorie === "Vêtements" ||
      categorie === "Orientation" ||
      categorie === "Autres Mots" ||
      categorie === "Formes" ||
      categorie === "Comportements" ||
      categorie === "Transports" ||
      categorie === "Multimédia" ||
      categorie === "Sécurité Routière" ||
      categorie === "Personnes" ||
      categorie === "Interrogatif" ||
      categorie === "Journee" ||
      categorie === "Heures" ||
      categorie === "Couverts"
    ) {
      continue;
    }
    // Affiche les catégories
    $(".contentC").append(
      '<div id="' +
        idCategorie +
        '" class="picto categorie audioC mx-4" title="' +
        categorie +
        '" ><img src="/images/categories/' +
        imageCategorie +
        '" alt="' +
        categorie +
        '"></div>'
    );
  }

  // Au clic d'une catégorie
  // $(".audioC").click(function () {
  //   categorie = $(this).attr("title");
  //   // La synthèse vocale lit son titre
  //   speech.text = categorie;
  //   speech.pitch = 1; // 0 à 2 = Hauteur
  //   speech.rate = 1; // 0.5 à 2 = Vitesse
  //   speech.volume = 0.5; // 0 à 1 = Volume
  //   speech.lang = "fr-FR"; // Langue
  //   speechSynthesis.speak(speech);
  //   // Appelle l'API des pictogrammes reliés à la catégorie
  //   getData1("/api/get/pictogram", "/api/get/subcategory");
  //   getCategorie(categorie);
  // });

  async function handleAPICalls(urls) {
    urls.forEach(async (url) => {
      try {
        const response = await fetch(url);
        if (response.ok) {
          const data = await response.json();
          console.log(data);
        } else {
          console.error(`Error ${response.status}: ${response.statusText}`);
        }
      } catch (error) {
        console.error(error);
      }
    });
  }
  $(".audioC").click(function (categorie) {
    speech.text = $(this).attr("title");
    speechSynthesis.speak(speech);
    handleAPICalls([
      "/api/get/pictoObjets",
      "/api/get/pictoAliments",
      "/api/get/pictoLieux",
      "/api/get/pictoBoissons",
      "/api/get/pictoActions",
      "/api/get/subcategory",
    ]);
    getCategorie(categorie);
  });
}
/* end Parcours Objets Categories */

/* Requête Pictogram */
// function getData1(url, url1) {
//   // url = api/get/pictogram  url1 = api/get/subcategory
//   myRequest = new XMLHttpRequest();
//   myRequest.onreadystatechange = getResponse1;
//   myRequest.open("GET", url);
//   myRequest.setRequestHeader("content-type", "application-json");
//   myRequest.send();
//   myRequest1 = new XMLHttpRequest();
//   myRequest1.onreadystatechange = getResponse1;
//   myRequest1.open("GET", url1);
//   myRequest1.setRequestHeader("content-type", "application-json");
//   myRequest1.send();
// }

//  le code en supprimant l'utilisation de l'objet XMLHttpRequest et en utilisant la fonction 'fetch' à la place.
async function getData1(url, url1) {
  try {
    const response1 = await fetch(url);
    if (response1.ok) {
      const data1 = await response1.json();
      console.log(data1);
    } else {
      console.error(`Error ${response1.status}: ${response1.statusText}`);
    }

    const response2 = await fetch(url1);
    if (response2.ok) {
      const data2 = await response2.json();
      console.log(data2);
    } else {
      console.error(`Error ${response2.status}: ${response2.statusText}`);
    }
  } catch (error) {
    console.error(error);
  }
}

/* Requête Pictogram */

/* Réponse Pictogram */
// function getResponse1() {
//   try {
//     if (
//       myRequest.readyState === XMLHttpRequest.DONE &&
//       myRequest1.readyState === XMLHttpRequest.DONE
//     ) {
//       switch (myRequest.status && myRequest1.status) {
//         case 500:
//           break;
//         case 404:
//           break;
//         case 200:
//           categorie = getCategorie(categorie);
//           responseData1 = JSON.parse(myRequest1.responseText);
//           responseData = JSON.parse(myRequest.responseText);
//           parcoursJSON1(categorie, responseData1, responseData);
//           break;
//       }
//     }
//   } catch (ex) {
//     console.log("Ajax error: " + ex.description);
//   }
// }

/* Réponse Pictogram */
// la fonction handleAPIResponses accepte une catégorie de paramètre. Le tableau urls contient tous les points de terminaison d'API que vous souhaitez appeler.

async function handleAPIResponses() {
  try {
    const urls = [
      "/api/get/pictoObjets",
      "/api/get/pictoAliments",
      "/api/get/pictoLieux",
      "/api/get/pictoBoissons",
      "/api/get/pictoActions",
    ];
    const responses = await Promise.all(urls.map((url) => fetch(url)));

    responses.forEach(async (response, index) => {
      if (response.ok) {
        const data = await response.json();
        console.log(`Data from ${urls[index]}`);
        console.log(data);
      } else {
        console.error(`Error ${response.status}: ${response.statusText}`);
      }
    });
  } catch (error) {
    console.error(error);
  }
}

/* Getter Categorie */
function getCategorie(categorie) {
  return categorie;
}
/* end Getter Categorie */

/* Parcours SubCategory Pictogram */
function parcoursJSON1(categorie, jsonObj1, jsonObj) {
  //
  // console.log(jsonObj);
  let countDiv = $(".contentP > div ").length;
  if (countDiv === 0) {
    // Si aucun pictogramme n'est présent
    for (let i = 0; i < jsonObj1.length; i++) {
      if (jsonObj1[i]["category_id"]["name"] === categorie) {
        let filename = jsonObj1[i]["filename"];
        let name = jsonObj1[i]["name"].toLowerCase();
        let id = jsonObj1[i]["id"];

        // Affiche les sous-catégories
        $(".contentP").append(
          '<div id="' +
            id +
            '" class="sous-categorie subcat audioSCP mx-4" title="' +
            name +
            '" ><img src="/images/sous-categories/' +
            filename +
            '" class="imgP" title="' +
            name +
            '" alt="' +
            name +
            '"></div>'
        );
      }
    }
    for (let i = 0; i < jsonObj.length; i++) {
      if (jsonObj[i]["category"]) {
        if (jsonObj[i]["category"]["name"] === categorie) {
          let filename = jsonObj[i]["filename"];
          let name = jsonObj[i]["name"].toLowerCase();
          let id = jsonObj[i]["id"];
          // Affiche les pictogrammes désirés
          $(".contentP").append(
            '<div id="' +
              id +
              '" class="picto audioP mx-4" title="' +
              name +
              '" ><img src="/images/pictograms/' +
              filename +
              '" class="imgP" title="' +
              name +
              '" alt="' +
              name +
              '"></div>'
          );
          $(".picto .imgP").draggable({
            // Les pictogrammes du carousel deviennent draggable
            helper: "clone", // Le pictogramme est cloné
            revert: "invalid", // Le retour ne se produit que si le draggable n'a pas été déposé sur un droppable
            start: function () {
              if ($(this).hasClass("droppedPicto")) {
                $(this).removeClass("droppedPicto");
                $(this).parent().removeClass("pictoPresent");
              }
            },
            appendTo: "body",
            snap: ".drop",
          });
        }
      }
    }
  } else {
    $(".contentP > div").remove();
    $(".contentSCP > div").remove();
    countDiv = 0;
    for (let i = 0; i < jsonObj1.length; i++) {
      if (jsonObj1[i]["category_id"]["name"] === categorie) {
        let filename = jsonObj1[i]["filename"];
        let name = jsonObj1[i]["name"].toLowerCase();
        let id = jsonObj1[i]["id"];
        // Affiche les sous-catégories
        $(".contentP").append(
          '<div id="' +
            id +
            '" class="sous-categorie subcat audioSCP mx-4" title="' +
            name +
            '" ><img src="/images/sous-categories/' +
            filename +
            '" class="imgP " title="' +
            name +
            '" alt="' +
            name +
            '"></div>'
        );
      }
    }
    for (let i = 0; i < jsonObj.length; i++) {
      if (jsonObj[i]["category"]) {
        if (jsonObj[i]["category"]["name"] === categorie) {
          let filename = jsonObj[i]["filename"];
          let name = jsonObj[i]["name"];
          let id = jsonObj[i]["id"];
          $(".contentP").append(
            '<div id="' +
              id +
              '" class="audioP picto mx-4" title="' +
              name +
              '" ><img src="/images/pictograms/' +
              filename +
              '" class="imgP" title="' +
              name +
              '" alt="' +
              name +
              '"></div>'
          );
          $(".picto .imgP").draggable({
            // Les pictogrammes du carousel deviennent draggable
            helper: "clone", // Le pictogramme est cloné
            start: function () {
              if ($(this).hasClass("droppedPicto")) {
                $(this).removeClass("droppedPicto");
                $(this).parent().removeClass("pictoPresent");
              }
            },
            revert: "invalid", // Le retour ne se produit que si le draggable n'a pas été déposé sur un droppable
            appendTo: "body",
            snap: ".drop",
          });
        }
      }
    }
  }
}
/* end Parcours SubCategory Pictogram */

// $(document).on("click", ".audioSCP", function (e) {
//   // Lorsque la souris intervient sur un pictogramme
//   // $(".audioSCP").click(function(){
//   subcategorie = $(this).attr("title");
//   speech.text = subcategorie;
//   speech.pitch = 1; // 0 à 2 = Hauteur
//   speech.rate = 1; // 0.5 à 2 = Vitesse
//   speech.volume = 0.5; // 0 à 1 = Volume
//   speech.lang = "fr-FR"; // Langue
//   speechSynthesis.speak(speech);
//   getData2("/api/get/pictoActions");
//   getSubCategorie(subcategorie);
// });

$(document).on("click", ".audioSCP", function (e) {
  // Lorsque la souris intervient sur un pictogramme
  subcategorie = $(this).attr("title");
  speech.text = subcategorie;
  speech.pitch = 1; // 0 à 2 = Hauteur
  speech.rate = 1; // 0.5 à 2 = Vitesse
  speech.volume = 0.5; // 0 à 1 = Volume
  speech.lang = "fr-FR"; // Langue
  speechSynthesis.speak(speech);
  getData2("/api/get/pictoActions");
  getData2("/api/get/pictoObjets");
  getData2("/api/get/pictoAliments");
  getData2("/api/get/pictoLieux");
  getData2("/api/get/pictoBoissons");
  getSubCategorie(subcategorie);
});
Promise.all([
  getData2("/api/get/pictoObjets"),
  getData2("/api/get/pictoAliments"),
  getData2("/api/get/pictoLieux"),
  getData2("/api/get/pictoBoissons"),
  getData2("/api/get/pictoActions"),
]).then(function (responses) {
  // Do something with the responses
  getResponse2(responses);
});

$(document).on("mousedown", ".audioP", function (e) {
  // Lorsque la souris intervient sur un pictogramme
  // $(".audioP").mousedown(function(){
  speech.text = $(this).attr("title");
  speech.pitch = 1; // 0 à 2 = Hauteur
  speech.rate = 1; // 0.5 à 2 = Vitesse
  speech.volume = 0.5; // 0 à 1 = Volume
  speech.lang = "fr-FR"; // Langue
  speechSynthesis.speak(speech);
});

/* Getter Categorie */
function getSubCategorie(subcategorie) {
  return subcategorie;
}
/* end Getter Categorie */

/* Requête Category */
// function getData2(url) {
//   myRequest = new XMLHttpRequest();
//   myRequest.onreadystatechange = getResponse2;
//   myRequest.open("GET", url);
//   myRequest.setRequestHeader("content-type", "application-json");
//   myRequest.send();
// }

function getData2(url) {
  return new Promise(function (resolve, reject) {
    myRequest = new XMLHttpRequest();
    myRequest.onreadystatechange = function () {
      if (myRequest.readyState === 4 && myRequest.status === 200) {
        resolve(myRequest.response);
      }
    };
    myRequest.open("GET", url);
    myRequest.setRequestHeader("content-type", "application-json");
    myRequest.send();
  });
}

/* end Requête Category */

/* Réponse Pictogram */
function getResponse2() {
  try {
    if (myRequest.readyState === XMLHttpRequest.DONE) {
      switch (myRequest.status) {
        case 500:
          break;
        case 404:
          break;
        case 200:
          responseData = JSON.parse(myRequest.responseText);
          subcategorie = getSubCategorie(subcategorie);
          parcoursJSON2(responseData, subcategorie);
          break;
      }
    }
  } catch (ex) {
    console.log("Ajax error: " + ex.description);
  }
}

function parcoursJSON2(jsonObj, subcategorie) {
  let countDiv = $(".contentSCP > div ").length;
  if (countDiv === 0) {
    // Si aucun pictogramme n'est présent
    for (let i = 0; i < jsonObj.length; i++) {
      //console.log(jsonObj[i]);
      if (jsonObj[i]["category"]) {
        continue;
      } else {
        let json = jsonObj[i]["subcategory_id"]["name"].toLowerCase();
        let subcat = subcategorie.toLowerCase();
        if (json === subcat) {
          let filename = jsonObj[i]["filename"];
          let name = jsonObj[i]["name"].toLowerCase();
          let id = jsonObj[i]["id"];
          // Affiche les pictogrammes désirés
          $(".contentSCP").append(
            '<div id="' +
              id +
              '" class="picto audioSCP1 mx-4" title="' +
              name +
              '" ><img src="/images/pictograms/' +
              filename +
              '" class="imgP" title="' +
              name +
              '" alt="' +
              name +
              '"></div>'
          );
          $(".picto .imgP").draggable({
            // Les pictogrammes du carousel deviennent draggable
            helper: "clone", // Le pictogramme est cloné
            revert: "invalid", // Le retour ne se produit que si le draggable n'a pas été déposé sur un droppable
            start: function () {
              if ($(this).hasClass("droppedPicto")) {
                $(this).removeClass("droppedPicto");
                $(this).parent().removeClass("pictoPresent");
              }
            },
            appendTo: "body",
            snap: ".drop",
          });
        }
      }
    }
  } else {
    $(".contentSCP > div").remove();
    countDiv = 0;
    for (let i = 0; i < jsonObj.length; i++) {
      if (jsonObj[i]["category"]) {
        continue;
      } else {
        let json = jsonObj[i]["subcategory_id"]["name"].toLowerCase();
        let subcat = subcategorie.toLowerCase();
        if (json === subcat) {
          let filename = jsonObj[i]["filename"];
          let name = jsonObj[i]["name"].toLowerCase();
          let id = jsonObj[i]["id"];
          // Affiche les pictogrammes désirés
          $(".contentSCP").append(
            '<div id="' +
              id +
              '" class="picto audioSCP1 mx-4" title="' +
              name +
              '" ><img src="/images/pictograms/' +
              filename +
              '" class="imgP" title="' +
              name +
              '" alt="' +
              name +
              '"></div>'
          );
          $(".picto .imgP").draggable({
            // Les pictogrammes du carousel deviennent draggable
            helper: "clone", // Le pictogramme est cloné
            revert: "invalid", // Le retour ne se produit que si le draggable n'a pas été déposé sur un droppable
            start: function () {
              if ($(this).hasClass("droppedPicto")) {
                $(this).removeClass("droppedPicto");
                $(this).parent().removeClass("pictoPresent");
              }
            },
            appendTo: "body",
            snap: ".drop",
          });
        }
      }
    }
  }
  $(".audioSCP1").mousedown(function () {
    // Lorsque la souris intervient sur un pictogramme
    speech.text = $(this).attr("title");
    speech.pitch = 1; // 0 à 2 = Hauteur
    speech.rate = 1; // 0.5 à 2 = Vitesse
    speech.volume = 0.5; // 0 à 1 = Volume
    speech.lang = "fr-FR"; // Langue
    speechSynthesis.speak(speech);
  });
}
