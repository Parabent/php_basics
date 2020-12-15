
<?
 $nr_indeksu = '150845';
 $nrGrupy = '6';
 echo 'Maksymilian Wrobel ' .$nr_indeksu. ' grupa ' .$nrGrupy. '<br /><br />';
 
 echo 'Funkcja include() pozwala dziedziczyc scope zmiennych z innego pliku';
 include 'vars.php';
 echo '<br /><br />';
 echo $var;

 echo '<br /><br />';
 echo 'Funkcja require_once() jest podobna do include, lecz sprawdzi czy plik jest juz dołączony, jęśli tak nie doda go ponownie';
 require_once 'vars.php';

 echo '<br /><br />';
 echo 'if pozwala na używanie warunków w naszym kodzie.';
 echo '<br /><br />';
 $a = 6;
 $b = 5;
 $c= 6;
 if ($a > $b)
    echo 'a is bigger than b';
 else if ($a == $c)
    echo 'a is equal to c';
 else 
    echo 'else statement display';
 
 echo '<br /><br />';   
 echo 'switch jest podobny do if, lecz operuje na jednym wyrazeniu.';
 echo '<br /><br />';   
 $i = 1;
 switch ($i) {
     case 0:
        echo 'i is equal 0';
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;

 }

 echo '<br /><br />';   
 echo 'Petla while jest najprostszym type petli. Petla sie wykonuje dopoki, warunek petli while jest prawdziwy, z kazda iteracja jest on sprawdzany.';
 echo '<br /><br />';
 $counter = 0;
 while ($counter < 5) {
     echo $counter++;
     
 }
 echo '<br /><br />';   
 echo 'Petla for jest najbardziej zlozona funkcja w php. Zawiera 3 wyrazenia. Pierwsze wyrazenie jest zmienna poczatkowa, drugie wyrazenie jest warunkiem, petla bedzie sie wykonywac dopki warunek jest prawdziwy, trzecie wyrazenie wykonuje sie co kazda iteracje.';
 echo '<br /><br />';
 for ($i = 0; $i < 5; $i++) {
     echo $i;
 }
 
 echo '<br /><br />';   
 echo '$_GET - Tablica asocjacyjna zmiennych przekazywana do bieżącego skryptu za pośrednictwem parametrów adresu URL. Aby wywołać poniższy przykład trzeba dodać do url ?name=Max';
 echo '<br /><br />';
 echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

 echo '<br /><br />';   
 echo '$_POST - Asocjacyjna tablica zmiennych przekazywana do bieżącego skryptu za pomocą metody POST HTTP, wysylana poprzez znacznik form w html';
 echo '<br /><br />';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
 echo '<br /><br />';   
 echo '$_SESSION - Tablica asocjacyjna zawierająca zmienne sesji dostępne dla bieżącego skryptu';
 echo '<br /><br />';
 session_start();
 $_SESSION["favcolor"] = "green";
 $_SESSION["favanimal"] = "cat";
 echo "Session variables are set.";

?>

