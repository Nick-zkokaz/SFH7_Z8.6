<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Практика SF</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img class="intro-image" src="img/phpstorm.jpg" alt="Фото офиса" width="551" height="356">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет. На самом деле данные закоментированы на основании ФЗ от 27.07.2006 № 152-ФЗ "О персональных данных"</p>
                    <p> PHP Цикл do...while от 1 до 5</p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;

                        echo 'Сумма чисел  '; echo $a; echo '  и  '; echo $b; echo '  равна  '; echo $c;

                    ?>

            </div>

            <div class="article">
                <p class="text">
                    PhpStorm  глубоко  анализирует  структуру кода и действительно понимает ваш код, поддерживая все возможности языка PHP как в новых, так и в legacy-проектах.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
