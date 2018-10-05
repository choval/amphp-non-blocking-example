
This is an example for running blocking functions in [Amp](https://amphp.org/).


```
$ composer install
$ php example.php

ASYNC example:
[17:09:40] START A
[17:09:40] START C
[17:09:40] START E
[17:09:40] START B
[17:09:40] START D
[17:09:41] END A
[17:09:41] END C
[17:09:41] END E
[17:09:42] END B
[17:09:42] END D
Results:
Array
(
    [A] => 6dcd4ce23d88e2ee9568ba546c007c63d9131c1b
    [B] => ae4f281df5a5d0ff3cad6371f76d5c29b6d953ec
    [C] => 32096c2e0eff33d844ee6d675407ace18289357d
    [D] => 50c9e8d5fc98727b4bbc93cf5d64a68db647f04f
    [E] => e0184adedf913b076626646d3f52c3b49c39ad6d
)

SYNC example:
[17:09:42] START A
[17:09:43] END A
[17:09:43] START B
[17:09:44] END B
[17:09:44] START C
[17:09:45] END C
[17:09:45] START D
[17:09:46] END D
[17:09:46] START E
[17:09:47] END E
Results:
Array
(
    [A] => 6dcd4ce23d88e2ee9568ba546c007c63d9131c1b
    [B] => ae4f281df5a5d0ff3cad6371f76d5c29b6d953ec
    [C] => 32096c2e0eff33d844ee6d675407ace18289357d
    [D] => 50c9e8d5fc98727b4bbc93cf5d64a68db647f04f
    [E] => e0184adedf913b076626646d3f52c3b49c39ad6d
)
```
