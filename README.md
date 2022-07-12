## Vocation
Praction with repository pattern.

## Description
Project shows how is realized repository pattern. In this project (as usual) the repository pattern is set using the interface which is
shown bellow:
```
interface MyRepositoryInterface
{
    public function save(Member $member);
    public function getAll();
    public function findById(Member $member);
}
```
Projects serializes 3 objects and store them in file "storage.txt". Reads data from that file, unserializes data and makes objects, put 
them to the array, outputs vardump of the array. Creates object and looks for an equal object in array. Outputs "Exists" if equal
object was found or outputs "Does not exist" instead.
