<div class="p-2 bd-highlight sidebar">
    <?php
        $cookie_name = "username";
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "<p>Hello " . $_COOKIE[$cookie_name] . ". <br /><a href='profile.php'>iProfile</a></p>";
        }
    ?>

    <img src="images/banner-resources.jpg" alt="GPBC resources" />
    
     <hr />
        <h5>Tag Wiki</h5>
        <ul class="list-group">
            <li class="list-group-item"><a href="wiki.php">NB Tag Wiki</a></li>
            <li class="list-group-item"><a href="wiki-add.php">Add a Tag</a></li>
         </ul>
         <hr />
         <h5>Markup Guide</h5>
        <ul class="list-group">
            <li class="list-group-item"><a href="markup.php">Markup guide</a></li>
            <li class="list-group-item"><a href="markup-2col.php">Two-column template</a></li>
         </ul>
         <hr />
         <h5>Document Repository</h5>
        <ul class="list-group">
            <li class="list-group-item"><a href="repository.php">Repository</a></li>
         </ul>
         <hr />
     <h5>Slack</h5>
        <ul class="list-group">
            <li class="list-group-item"><a href="https://bcgreencampaign.slack.com" target="_blank">BC Green Campaign</a></li>
            <li class="list-group-item"><a href="https://bcgreensfieldteam.slack.com" target="_blank">BC Green Field Teams</a></li>
         </ul>
         <hr />
        <h5>Communications</h5>
            <ul class="list-group">
                <li class="list-group-item"><a href="https://google.com" target="_blank">Google</a></li>
                <li class="list-group-item"><a href="https://nationbuilder.com/" target="_blank">NationBuilder</a></li>
                <li class="list-group-item"><a href="https://trello.com" target="_blank">Trello</a></li>
            </ul>
        <hr />
        <h5>Office Links</h5>
            <ul class="list-group">
                <li class="list-group-item"><a href="staff.php">GPBC Directory</a></li>
                <li class="list-group-item"><a href="" target="_blank">Privacy Policy</a></li>
                <li class="list-group-item"><a href="https://www.bcgreens.ca/constitution" target="_blank">Constitution and Bylaws</a></li>             
                <li class="list-group-item"><a href="https://www.bcgreens.ca/artwork_and_templates" target="_blank">Artwork and Templates</a></li>
           </ul>

</div>