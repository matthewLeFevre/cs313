//================================
// Globals Class
//================================

class Globals {

  url= 'https://nameless-basin-41865.herokuapp.com/server.php';

  headers= {
    "Content-Type": "application/json",
    "Accept": "application/json",
  };

  createRandomKey(length = 7) {
    let id = "";
    let possibleCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (let i = 0; i < length; i++) {
      id += possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
    }

    return id;
  }

  htmlDecode(input){
    var e = document.createElement('div');
    e.innerHTML = input;
    return e.childNodes.length === 0 ? "" : e.childNodes[0].nodeValue;
  }

  createRequest(data) {

    let req = {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json"
      },
      body: JSON.stringify(data),
    }

    return req;
  }

  createBody(controller, action, payload) {
    let body = {
      controller: controller,
      action: action,
      payload: payload,
    }

    return body;
  }

  createRequestBody(controller, action, payload) {
    let body = {
      controller: controller,
      action: action,
      payload: payload,
    }
    let req = {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json"
      },
      body: JSON.stringify(body),
    }

    return req;
  }

  concatArray(arr1, arr2) {
    return arr1.concat(arr2);
  }

  makeWord (length) {
    var word = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    let wordLength = Math.floor(Math.random() * length) + 1;
  
    for (let i = 0; i < wordLength; i++) {
      word += possible.charAt(Math.floor(Math.random() * possible.length));
    }
      
  
    return word;
  }
  
  makeSentence(length) {
    let sentence = "";
    let sentenceLength = Math.floor(Math.random() * length) + 4;
  
    for( let i = 0; i < sentenceLength; i++) {
      sentence += " " + this.makeWord(12);
    }
  
    sentence += ".";
  
    return sentence;
  }
  
    makeParagraph(length) {
    let para = " ";
    
    for( let i = 0; i < length; i++) {
      para += " " + this.makeSentence(12);
    }
  
    return para;
  }
}

//Export Statement
export default Globals;