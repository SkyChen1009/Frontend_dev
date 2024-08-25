<?
include_once 'login_pokemon.php';
echo "<br>";
$sql = "select * from pokedox";

$result = $conn->query($sql);

if($result->num_rows>0){
    #輸出data每個row
    while($row = $result->fetch_assoc()){
        echo "Pokemon ID : ".$row["pokemonID"]."<br>";
        echo "Pokemon Name : ".$row["pokemonName"]."<br>";
        echo "------------------------------------------<br>";
    }
}else{
    echo "0 results";
}
?>