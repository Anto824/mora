function reset(){
  document.getElementById('scorejoueur1').value = 0
  document.getElementById('scorejoueur2').value = 0
  J1 = 0
  J2 = 0
}

var J1 = 0;
var J2 = 0;


function randomIntFromInterval(min, max) { 
  return Math.floor(Math.random() * (max - min + 1) + min)
}


function jouer(){
  j1=parseInt(document.getElementById('joueur1').value)
  j2 = randomIntFromInterval(1,5)
  document.getElementById('joueur2').innerHTML = j2
  sommej1 = parseInt(document.getElementById('somme1').value)
  sommej2 = randomIntFromInterval(2,10)
  document.getElementById('somme2').innerHTML=sommej2
  somme = j1 + j2

  console.log(somme)
  console.log(sommej1)
  console.log(sommej2)
  if (Math.abs(somme - sommej1) < Math.abs(somme - sommej2)){
      console.log('joueur 1')
      J1++;
      document.getElementById('scorejoueur1').innerHTML = J1
  }
  else{
      console.log('joueur 2')
      J2++;
      document.getElementById('scorejoueur2').innerHTML = J2
  }
  if (J1 == 5){
      document.getElementById('gagnant1').hidden = false
      reset()
  }
  else if (J2 == 5){
      document.getElementById('gagnant2').hidden = false
      reset()
  }

}