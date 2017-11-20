<?php include 'core/request.php'; ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ToDoList</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
        
        <script type="text/javascript" src="calendrier.js"></script>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css" />
        
        
	</head>	
 

	<body>

<div class="main">
   <form method="post"> 
    <div class="main-header">
        <h1>My TodoList</h1>
        <div id="add" onclick="change();">
        <img src="image/cross-circular-button-interface-symbol_icon-icons.com_74201.png" alt="croix" id="croix"/>
        </div>
        <div class="ligne"><hr></div> 
    </div>
     

    <div id="main-container">
       <?php while ($donnees = $tasks->fetch(PDO::FETCH_ASSOC)) { ?>
        <ul class="list" id="todo-list">
            <li class="list-item-done">
                <header class="item-header">
                    <a href="#"><h2 class="item-title"><?php echo $donnees['task_title']; ?></h2></a>
                    <ul class="menu">
                        <li class="menu-item"><a href="#">Done</a>
                    </li>
                        <li class="menu-item"><a href="#">Delete</a>
                    </li>
                        <li class="menu-item"><a href="#">Edit</a>
                    </li>
                    </ul> 
                </header>

                <div class="item-container"><?php echo $donnees['task_description']; ?> </div>
                
                <footer class="item-footer">
                    <span>Started on:<div class="start-time"><p><?php echo $donnees['task_start_timestamp']; ?></p></div></span>
                    <span>End time:<div class="end-time"><p><?php echo $donnees['task_end_timestamp']; ?></div></span>
                </footer>
            </li>
        </ul> 
       <?php }; ?>
        <div class="ligne"><hr></div> 
        <!--  -->
       
        <!--  -->
         <?php while ($donnees = $tasks->fetch(PDO::FETCH_ASSOC)) { ?>
         <ul class="list" id="todo-list">
            <li class="list-item-nodone">
                
                <header class="item-header">
                    <a href="#"><h2 class="item-title"><?php echo $donnees['task_title']; ?></h2></a>
                    <ul class="menu">
                        <li class="menu-item"><a href="#">Done</a>
                    </li>
                        <li class="menu-item"><a href="#">Delete</a>
                    </li>
                        <li class="menu-item"><a href="#">Edit</a>
                    </li>
                    </ul> 
                </header>

                <div class="item-container"><?php echo $donnees['task_description']; ?></div>
                
                <footer class="item-footer">
                    <span>Started on:<div class="start-time"><p><?php echo $donnees['task_start_timestamp']; ?></p></div></span>
                    <span>End time:<div class="end-time"><p><?php echo $donnees['task_end_timestamp']; ?><p></div></span>
                </footer> 
            </li>
        </ul> 
        <?php }; ?>
        <div class="ligne"><hr></div> 
    
        

        
        <!--  -->
        <?php while ($donnees = $tasks->fetch(PDO::FETCH_ASSOC)) { ?>
          <ul class="list" id="todo-list">
            <li class="list-item-donelate">
                  <header class="item-header">
                    <a href="#"><h2 class="item-title"><?php echo $donnees['task_title']; ?></h2></a>
                    <ul class="menu">
                        <li class="menu-item"><a href="#">Done</a>
                    </li>
                        <li class="menu-item"><a href="#">Delete</a>
                    </li>
                        <li class="menu-item"><a href="#">Edit</a>
                    </li>
                    </ul> 
                </header>

                <div class="item-container"><?php echo $donnees['task_description']; ?></div>
                
                <footer class="item-footer">
                    <span>Started on:<div class="start-time"><p><?php echo $donnees['task_start_timestamp']; ?></p></div></span>
                    <span>End time:<div class="end-time"><p><?php echo $donnees['task_end_timestamp']; ?><p></div></span>
                </footer>
                    
            </li>
        </ul>
        <?php }; ?>  
        <div class="ligne"><hr></div>
   
 
     <div id="main-footer">
       
        <div class="foot-wrapper">
            <h2>Show:</h2>

            <ul class="ul-footer">
                <li class="li-footer"><input type="submit" name="getTask" value="All task"></li>
                <li class="li-footer"><input type="submit" name="getTask" value="To do task"></li>
                <li class="li-footer"><input type="submit" name="getTask" value="Done task"></li>

            </ul>
        </div>
    </div>
  
 </div>
 </form>

<form method="post"> 
<div id="next_container">
    <div id="main-next_container">
         <div class="clear"><a href="#">CLEAR</a></div>
         <h2 class="item-title_next_container">TITLE</h2>
         <input type=textarea" class="title" id="task_title" name="task_title"></input>
         <div class="ligne"><hr></div> 
         <h2 class="item-title_next_container">DESCRIPTION</h2>
         <input type=textarea" class="descrip" id="task_description" name="task_description"></input>
         <div class="ligne"><hr></div> 
         <h2 class="item-title_next_container">START ATT:</h2>
        

         <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
            <tr>
                <td id="ds_calclass"></td>
            </tr>
         </table>
        
         <input type="text" name="task_start_timestamp" onclick="ds_sh(this);" />
         
        
         <div class="ligne"><hr></div> 
          
         
        
        <h2 class="item-title_next_container">END ATT:</h2>
        <!-- Ceci est un calenderier2 -->
        <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
            <tr>
                <td id="ds_calclass"></td>
            </tr>
        </table>
       
        <input type="text" name="task_end_timestamp" onclick="ds_sh(this);" />
        
        
        <div class="ligne"><hr></div> 
    </div>  

 

    <div id="main-footer_next_container">
       
        <div class="foot-wrapper">
            

            <ul class="ul-footer">
                <li class="li-footer"><input type="submit" name="insertTask" id="insertTask" value="Add task and create new one"> </li>
                <li class="li-footer"><input type="submit" name="insertTask" id="insertTask" value="Add task"></li>
                
        </div>
    </div>
   </div> 
   </form>
</div>


<script src="script.js"></script>
    
    <script>
        var angle = 0;
        let addclick = document.getElementById('add');
        console.log(add);
        addclick.addEventListener('click', 
            function () {  
                angle += 45;  
                let croix = document.getElementById('croix');
                console.log(croix);

                croix.style.webkitTransform= 'rotate(' + angle + 'deg)';
            }
        );
        </script>

        <script type="text/javascript">
        function change() 
        {
        
        if (document.getElementById("next_container").style.display == "block") 
        {
            document.getElementById('next_container').style.display = 'none';
            
            document.getElementById('main-container').style.display = 'block';
            
            
            
        }
        else 
        {
            document.getElementById('next_container').style.display = 'block';
            document.getElementById('main-container').style.display = 'none';

           }
        
    }
        </script>
    
    <script>
        var acc = document.getElementsByClassName("item-title");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        
        var panel = this.parentNode.parentNode.parentNode.querySelector(".item-container");
          var panel_2 = this.parentNode.parentNode.parentNode.querySelector(".item-footer");
       var panel_3 = this.parentNode.parentNode.parentNode.querySelector("ul.menu");

        if (panel.style.display === "block") {
        panel.style.display = "none";
     } else {
            panel.style.display = "block";
      }

      if (panel_2.style.display === "block") {
        panel_2.style.display = "none";
     } else {
            panel_2.style.display = "block";
      }

     if (panel_3.style.display === "block") {
        panel_3.style.display = "none";
     } else {
            panel_3.style.display = "block";
      } 
      
    }
}
</script>        

	<script type="text/javascript" src="calendrier.js">/script>	

	</body>
		
</html>