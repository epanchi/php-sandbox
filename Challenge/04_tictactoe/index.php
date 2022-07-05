<?php

require_once('gameboards.php');
class TicTacToe
{
    private $board;
    private $boardName;
    private $size = null;
    private $win = null;

    public function __construct($board = null, $boardName = null)
    {
        $this->board = $board;
        $this->boardName = $boardName;
        // Store array dimension
        $this->size = sizeof($this->board);
    }

    public function getBoardName()
    {
        return $this->boardName;
    }

    /**
     * returns the status of the game as a string
     * possible statuses:
     *    • x has won
     *    • o has won
     *    • game is still in progress
     *    • game is over with no winner (cats game)
     **/
    public function getGameStatus()
    {
        // TODO: return the current status of the game.
        // print_r($this->size);


        for ($i = 0; $i < $this->size; $i++) {
            if ($this->checkHorizontal($i))
                break;
            if ($this->checkVertical($i)) {
                break;
            }
            if ($this->checkDiagonal($i)) {
                break;
            }
        }


        if (isset($this->win))
            return $this->win . ' wins';
        elseif ($this->checkGameInProgress())
            return 'Game in progress';
        elseif ($this->checkTieGame())
            return 'Tie';
        return "unknown";
    }


    // Optional Helper Functions
    //
    public function checkHorizontal($row)
    {
        $line = [];
        // Get line: Array ( [0] => x [1] => x [2] => x )
        foreach ($this->board as $index => $element) {
            array_push($line, $this->board[$row][$index]);
        }
        // Count occurences  
        $result = array_count_values($line);
        // Organice count results as value
        asort($result);
        // Verify the occurrence for win, it will be equal to dimension array
        $key = array_search($this->size, $result);
        if ($key) {
            $this->win = $key;
            return true;
        }
        return false;
    }

    public function checkVertical($column)
    {
        $line = [];
        // Get line: Array ( [0] => x [1] => x [2] => x )
        foreach ($this->board as $index => $element) {
            array_push($line, $this->board[$index][$column]);
        }
        // Count occurences  
        $result = array_count_values($line);
        // Organice count results as value
        asort($result);
        // Verify the occurrence for win, it will be equal to dimension array
        $key = array_search($this->size, $result);
        if ($key) {
            $this->win = $key;
            return true;
        }
        return false;
    }

    public function checkDiagonal()
    {
        $line = [];
        // Get line: Array ( [0] => x [1] => x [2] => x )
        foreach ($this->board as $index => $element) {
            array_push($line, $this->board[$index][$index]);
        }
        // Count occurences  
        $result = array_count_values($line);
        // Organice count results as value
        asort($result);
        // Verify the occurrence for win, it will be equal to dimension array
        $key = array_search($this->size, $result);
        if ($key) {
            $this->win = $key;
            return true;
        }
        return false;
    }

    public function checkGameInProgress()
    {
        $result = array_count_values($this->flat());
        // this case after flat array: Array ( [x] => 3 [ ] => 3 [o] => 3 )
        if (sizeof($result) == 3)
            return true;
        return false;
    }

    public function checkTieGame()
    {
        $result = array_count_values($this->flat());

        if (sizeof($result) == 2)
            return true;
        return false;
    }

    public function flat()
    {
        $response = [];
        for ($i = 0; $i < $this->size; $i++) {
            for ($j = 0; $j < $this->size; $j++) {
                array_push($response, $this->board[$i][$j]);
            }
        }
        return $response;
    }
}
?>

<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php
    $games[] = new TicTacToe($xWins, 'xWins');
    $games[] = new TicTacToe($oWins, 'oWins');
    $games[] = new TicTacToe($inProgress, 'inProgress');
    $games[] = new TicTacToe($tieGame, 'tieGame');
    $games[] = new TicTacToe($xWins5, 'xWins5');
    foreach ($games as $game) {
        echo '<p>Game Status for ' . $game->getBoardName() . ': ' .  $game->getGameStatus() . '</p>';
    }
    ?>
</body>

</html>