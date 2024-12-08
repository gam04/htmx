<?php

session_start();

if (isset($_SESSION['todo'])) {
    foreach($_SESSION['todo'] as $todo) {
        $doneAttr = $todo['done']? 'checked' : '';
        echo <<<HTML
            <form hx-swap="none" hx-post="/done.php" hx-trigger="change from:input[name='done']">
                <details>
                    <summary>
                        <input {$doneAttr} name="done" type="checkbox" > 
                            {$todo['name']} 📅 {$todo['date']} 
                        
                        <input name="taskname" type="hidden" value="{$todo['name']}"> 
                    </summary>
                    <p>{$todo['description']}</p>
                </details>
            </form>
        HTML;
    }
}
?>