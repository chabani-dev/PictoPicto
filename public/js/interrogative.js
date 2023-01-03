let sentenceToQuestion = $("#sentenceText"); // Champs de la phrase

/* Requête Pictogram à l'interrogative */
function getDataQuest(url) {
  myRequest = new XMLHttpRequest();
  myRequest.onreadystatechange = getResponseQuest;
  myRequest.open("GET", url);
  myRequest.setRequestHeader("content-type", "application-json");
  myRequest.send();
}
/* Requête Pictogram Pictogram à l'interrogative*/

/* Réponse Pictogram à l'interrogative */
function getResponseQuest() {
  try {
    if (myRequest.readyState === XMLHttpRequest.DONE) {
      switch (myRequest.status) {
        case 500:
          break;
        case 404:
          break;
        case 200:
          responseData = JSON.parse(myRequest.responseText);
          parcoursJSONQuest(responseData);
          parcoursJSONPlur(responseData);
          break;
      }
    }
  } catch (ex) {
    console.log("Ajax error: " + ex.description);
  }
}
/* Réponse Pictogram à Conjuguer */

/* Parcours Objets Pictogramme à Conjuguer */
function parcoursJSONQuest(jsonObj) {
  let phrase = [];
  let premierVerbe;
  let infinitifVerbe;
  let sujet = ["je", "tu", "il", "elle", "nous", "vous", "ils", "elles", "eux"];
  // word = sentenceToQuestion.text().split(' ');
  for (let i = 0; i < jsonObj.length; i++) {
    let name = jsonObj[i]["name"].toLowerCase(); // Renvoie le nom,
    let premPersSing = jsonObj[i]["prem_pers_sing"]; // la première personne du singulier,
    let deuxPersSing = jsonObj[i]["deux_pers_sing"]; // la deuxième,
    let troisPersSing = jsonObj[i]["trois_pers_sing"]; // la troisième,
    let premPersPlur = jsonObj[i]["prem_pers_plur"]; // la première personne du pluriel,
    let deuxPersPlur = jsonObj[i]["deux_pers_plur"]; // la deuxième,
    let troisPersPlur = jsonObj[i]["trois_pers_plur"]; // la troisième
    // Si un verbe est déjà présent alors ne conjugue plus rien

    /* Conjugaison */
    if (
      premPersSing === name.substring(0, name.length - 1) ||
      name == "être" ||
      name == "avoir" ||
      name == "descendre" ||
      name == "se moucher" ||
      name == "s'habiller" ||
      name == "se déshabiller" ||
      name == "mettre" ||
      (!sentenceToQuestion.text().includes(premPersSing) &&
        !sentenceToQuestion.text().includes(deuxPersSing) &&
        !sentenceToQuestion.text().includes(troisPersSing) &&
        !sentenceToQuestion.text().includes(premPersPlur) &&
        !sentenceToQuestion.text().includes(deuxPersPlur) &&
        !sentenceToQuestion.text().includes(troisPersPlur))
    ) {
      if (
        sentenceToQuestion.text().includes("je") ||
        sentenceToQuestion.text().includes("Je") ||
        sentenceToQuestion.text().includes("j'") ||
        sentenceToQuestion.text().includes("J'")
      ) {
        // Conjugaison à la première personne du singulier
        if (premPersSing !== null) {
          // Si le mots en question peut être conjugué
          if (
            sentenceToQuestion.text().includes(" " + name + " ") ||
            sentenceToQuestion.text().includes("'" + name + " ")
          ) {
            // Et si le mot en question apparaît dans le champs phrase
            phrase.push(name);
            phrase.push(sujet);

            if (phrase.length === 1) {
              premierVerbe = premPersSing;
              infinitifVerbe = name;
              //sujet = phrase[0];
              console.log(sujet);
              // console.log("Cette phrase contient \""+name+"\" qui doit donc être remplacé par \""+premPersSing+"\"");
              sentenceToQuestion.text(
                sentenceToQuestion.text().replace(name, premPersSing)
              );

              //let question= [phrase[0],phrase[1]];
              //sentenceToQuestion.text().replace();
              // Alors remplace le par sa variante
              if (
                vowel.includes(premPersSing.charAt(0)) &&
                sentenceToQuestion.text().includes("je ")
              ) {
                // Si le verbe commence par une voyelle
                sentenceToQuestion.text(
                  sentenceToQuestion.text().replace("je ", "j'")
                ); // Alors remplace "je" par "j'"
              } else if (
                vowel.includes(premPersSing.charAt(0)) &&
                sentenceToQuestion.text().includes("Je ")
              ) {
                sentenceToQuestion.text(
                  sentenceToQuestion.text().replace("Je ", "J'")
                );
              }
            }
          }
        }
      } else if (
        sentenceToQuestion.text().includes("tu") ||
        sentenceToQuestion.text().includes("Tu")
      ) {
        // Conjugaison à la deuxième personne du singulier
        if (deuxPersSing !== null) {
          if (sentenceToQuestion.text().includes(" " + name + " ")) {
            phrase.push(name);
            phrase.push(sujet);
            if (phrase.length === 1) {
              premierVerbe = deuxPersSing;
              infinitifVerbe = name;
              // console.log("Cette phrase contient \""+name+"\" qui doit donc être remplacé par \""+deuxPersSing+"\"");
              sentenceToQuestion.text(
                sentenceToQuestion.text().replace(name, deuxPersSing)
              );
            }
          }
        }
      } else if (
        sentenceToQuestion.text().includes("nous") ||
        sentenceToQuestion.text().includes("Nous")
      ) {
        // Conjugaison à la première personne du pluriel
        if (premPersPlur !== null) {
          if (sentenceToQuestion.text().includes(" " + name + " ")) {
            phrase.push(name);
            phrase.push(sujet);
            if (phrase.length === 1) {
              premierVerbe = premPersPlur;
              infinitifVerbe = name;
              // console.log("Cette phrase contient \""+name+"\" qui doit donc être remplacé par \""+premPersPlur+"\"");
              sentenceToQuestion.text(
                sentenceToQuestion.text().replace(name, premPersPlur)
              );
            }
          }
        }
      } else if (
        sentenceToQuestion.text().includes("vous") ||
        sentenceToQuestion.text().includes("Vous")
      ) {
        // Conjugaison à la deuxième personne du pluriel
        if (deuxPersPlur !== null) {
          if (sentenceToQuestion.text().includes(" " + name + " ")) {
            phrase.push(name);
            phrase.push(sujet);
            if (phrase.length === 1) {
              premierVerbe = deuxPersPlur;
              infinitifVerbe = name;
              // console.log("Cette phrase contient \""+name+"\" qui doit donc être remplacé par \""+deuxPersPlur+"\"");
              sentenceToQuestion.text(
                sentenceToQuestion.text().replace(name, deuxPersPlur)
              );
            }
          }
        }
      } else if (
        sentenceToQuestion.text().includes("eux") ||
        sentenceToQuestion.text().includes("Eux") ||
        sentenceToQuestion.text().includes("ils") ||
        sentenceToQuestion.text().includes("Ils") ||
        sentenceToQuestion.text().includes("elles") ||
        sentenceToQuestion.text().includes("Elles")
      ) {
        // Conjugaison à la troisième personne du pluriel
        if (troisPersPlur !== null) {
          if (sentenceToQuestion.text().includes(" " + name + " ")) {
            phrase.push(name);
            phrase.push(sujet);
            if (phrase.length === 1) {
              premierVerbe = troisPersPlur;
              infinitifVerbe = name;
              // console.log("Cette phrase contient \""+name+"\" qui doit donc être remplacé par \""+troisPersPlur+"\"");
              sentenceToQuestion.text(
                sentenceToQuestion.text().replace(name, troisPersPlur)
              );
            }
          }
        }
      } else {
        if (troisPersSing !== null) {
          // Conjugaison à la troisième personne du singulier
          if (sentenceToQuestion.text().includes(" " + name + " ")) {
            phrase.push(name);
            phrase.push(sujet);
            if (phrase.length === 1) {
              premierVerbe = troisPersSing;
              infinitifVerbe = name;
              // console.log("Cette phrase contient \""+name+"\" qui doit donc être remplacé par \""+troisPersSing+"\"");
              sentenceToQuestion.text(
                sentenceToQuestion.text().replace(name, troisPersSing)
              );
            }
          }
        }
      }
    }
  }
  //let rev = s.split('').reverse().join('');
  // let reverse = sentenceToQuestion.text().reverse(sujet);
  // console.log("reverse:", reverse);
  recordingSentence();

  /* end Conjugaison */
}
function recordingSentence() {
  sentenceToQuestion.text(sentenceToQuestion.text() + "?");
  let reverse = sentenceToQuestion.text().reverse(sujet).join("");
  console.log("reverse:", reverse);
  $("#sentence_text").val(sentenceToQuestion.text()); // Donne sa valeur à l'input caché-
}
