scoreAffect = 100;
init();
de();

function de()
{
  

document.querySelector('.bt').addEventListener('click', function() {
    if(playing) {
       
        scores[joueurActuel] = tourScore;


        document.querySelector('#score-global-' + joueurActuel).textContent = scores[joueurActuel];
       console.log('Joueur ' + actualPlayer + scores[actualPlayer]);

        var scoreWinner = scoreAffect;

    
   if(scores[joueurActuel] >= scoreWinner ) {
    document.querySelector('#player-' + actualPlayer + '-name').textContent = 'Gagnant !';
   
   
    playing = false;
        } else {
          nextPlayer();
        }
    }
});


    //
  
    
document.querySelector('.arrow').addEventListener('click', function (){
    if (playing) {
        var de = Math.floor(Math.random() * 3 + 1 );
    
        let deDom = document.querySelector('.dice img ');
        
       
    
       deDom.src = '../img/img%20Dé.PNG' + de ;
    
    
        if (de !==1){
            tourScore += de;
      
            document.querySelector('.score-actuel-' + joueurActuel).textContent = tourScore;
    
        } else {
        nextPlayer();
    
        }
        nextDice = de;
                }
            });
        }
    

    function nextPlayer() {
     
     joueurActuel == 1 ? joueurActuel= 2 : joueurActuel = 1;
      
        tourScore = 0;
        
        document.querySelector('.tour').classList.toggle('.h3#title-p1-ti');
        document.querySelector('.tour').classList.toggle('.h3#title-p2-ti');
        
        
    }
    
    document.querySelector('.New_game_btn').addEventListener('click', init);
    
    
    function init() {
        scores = [0, 5, 10,];
    tourScore = 0;
     joueurActuel = 1;
       playing = true;
     
      
     
      document.querySelector('#score-global-1').textContent = '0';
      document.querySelector('#score-global-2').textContent = '0';
      document.querySelector('.score-actuel-1').textContent = '0';
      document.querySelector('.score-actuel-2').textContent = '0';
     
     document.querySelector('.tour').classList.add('.h3#title-p1-ti');
     document.querySelector('.tour').classList.add('.h3#title-p2-ti');
  
    }
    