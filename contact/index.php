<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="commissions";

    $mysqli = new mysqli($server, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        echo "Connected successfully";
    }
?>

<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $instagram = $_POST['instagram'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $files = $_FILES['references']['name'];
        $reference_link = $_POST['reference_link'];
        $deadline = $_POST['deadline'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Me</title>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
    <a name="Top"></a>
    <div class="menu">
        <div class="logo">
        <img src="../imgs/misc/PlaceholderLogo.png" alt="Logo-Placeholder" width="85px">
        <a href="../index.php">MV's Atelier</a>
        </div>
        <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>
        <ul id="main-menu">
            <li><a href="../index.php">Home</a></li>
            <li class="separator"> | </li>
            <li><a href="../gallery/index.php">Gallery</a></li>
            <li class="separator"> | </li>
            <li><a href="index.php">Contact</a></li>
            <li class="separator"> | </li>
            <li><a href="../about/index.php">About</a></li>
        </ul>
    </div>
    <br>
    <div class="commission_board">
        <h2>Commission Board</h2>
        <div class="content">
        <table class="commission_table">
            <thead>
                <tr>
                    <th colspan="3">Available Quests</th>
                </tr>
                <tr>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Character Design</td>
                    <td>$50</td>
                    <td>Includes front and back views, color palette, and a short description.</td>
                </tr>
                <tr>
                    <td>Full Illustration</td>
                    <td>$100</td>
                    <td>Includes background, character(s), and full color.</td>
                </tr>
                <tr>
                    <td>Animation (2D)</td>
                    <td>$150</td>
                    <td>Includes a short looped animation (up to 5 seconds).</td>
                </tr>
                <tr>
                    <th colspan="3">Prices may vary depending on complexity and additional characters</th>
                </tr>
                <tr>
                    <th colspan="3">All prices are in US dollars</th>
                </tr>
            </tbody>
        </table>
        <div class="will_wont">
        <h3>Will Do:</h3><br>
        <ul>
            <li>Original Characters</li>
            <li>Fan Art</li>
            <li>Furry</li>
            <li>Fantasy/Humanoid</li>
            <li>Animals/Creatures</li>
            <li>Light Gore</li>
            <li>Simple Backgrounds</li>
        </ul>
        <h3>Won't Do:</h3><br>
        <ul>
            <li>Mecha</li>
            <li>Anime Style</li>
            <li>Hyper Realism</li>
            <li>Heavy Gore</li>
            <li>NSFW</li>
            <li>Fetishes/Suggestive</li>
            <li>Hateful Content</li>
            <li>Complex Backgrounds</li>
        </ul>
        </div>
        </div>
    </div>
    <br>
    <p>Hey, thanks for reaching out! I'll get in touch with you using the address provided below as soon as possible. Make sure to check my commission info and read my Terms of Service, be as detailed as you want in your request! While you wait ever so patiently for my reply, feel free to browse my <a href="../gallery/index.php">Gallery</a> for more examples of my work.</p>
    <br>
    <div class="form_container">
    <div class="contact_form">
        <h2>~ Contract ~</h2>
        <form action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <p>
                    <label for="name"><strong>X</strong></label>
                    <input type="text" id="name" name="name" value="<?php
                    if(isset($name)) echo $name ?>"> (Your Name or Username) hereby declares to agree to the Terms and Conditions of the Artist's services listed below.
                </p>
            </div>
            <div class="form-group">
                <ul>
                    <li>Payment is required upfront.</li>
                    <li>Turnaround times may vary between 2-6 weeks depending on complexity, queue, and outside magical interference.</li>
                    <li>Up to 3 (three) minor revisions are included; major reworks may require an extra offering.</li>
                    <li>All commissions are for <b>personal use only</b> unless commercial rights are explicitly discussed.</li>
                    <li>You may not resell, alter, or claim my work as your own.</li>
                    <li>You may not use my work for AI training, NFTs, or Necromancy</li>
                    <li>I reserve the right to refuse any commission request.</li>
                    <li>Mimics are not held responsible for missing scrolls, unsent owls, or broken contracts due to user error.</li>
                </ul>
            </div>
            <div class="form-group">
                <p>Any and all information provided in this form will be used solely for the purpose of contacting you regarding your commission request. I will not share or sell your information to any third parties.</p>
            </div>
            <div class="form-group">
                <h3>Furthermore</h3>
            </div>
            <div class="form-group">
                <p>
                    <label for="instagram"><b>I. </b>Instagram Handle (optional):</label>
                    <input type="text" id="instagram" name="instagram" placeholder="@username" value="<?php
                    if(isset($instagram)) echo $instagram ?>"> (I prefer discussing the commission details through DMs!)
                </p>
            </div>
            <div class="form-group">
                <p>
                    <label for="email"><b>II. </b>Sending Stone:</label>
                    <input type="email" id="email" name="email" placeholder="name@example.com" value="<?php
                    if(isset($email)) echo $email ?>">
                </p>
            </div>
            <div class="form-group">
                <p>
                    <label for="type"><b>III. </b>What tale do you wish to tell?</label>
                    <select id="type" name="type">
                        <option value="0" disabled selected>| Commission Type |</option>
                        <?php
                            $query = $mysqli->query("SELECT * FROM comms_types");
                            while($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores['id'].'">'.$valores['type'].'</option>';
                            }
                        ?>
                    </select>
                    <br>
                    (If you selected "Other", please specify in the description)
                </p>
            </div>
            <div class="form-group">
                <p>
                    <b>IV. </b>Brief Description:
                    <textarea id="description" name="description" placeholder="Tell me what you'd like in your commission! Be as detailed as possible and make sure to upload all your references below." value="<?php
                    if(isset($description)) echo $description ?>"></textarea>
                </p>
            </div>
            <div class="form-group">
                <p>
                    <label for="references"><b>V. </b>Scrolls or References:</label>
                    <input type="file" id="references" name="references" multiple><br>
                    (You can upload multiple files at once, or just send me a link to your references)<br>
                    <input type="url" id="reference_link" name="reference_link" placeholder="https://example.com/references">
                </p>
            </div>
            <div class="form-group">
                <p>
                    <label for="deadline"><b>VI. </b>If you have a specific deadline, please let me know!</label>
                    <input type="date" id="deadline" name="deadline">
                </p>
            </div>
            <input type="submit" name="submit" value="Send Owl">
            <?php
                include('validate_form.php');
            ?>
        </form>
    </div>
    <div class="deco" id="treeInt-1"></div>
    <div class="deco" id="treeInt-2"></div>
    </div>
    <p><a href="#Top">Back to Top</a></p>
    <hr>
    <div class="footer">
        <div class="content">
        <h6>Portfolio</h6>
        <h5><a href="../index.php">MV's Atelier</a></h5>
        <h6>Contact</h6>
        </div>
        <ul>
            <li>|</li>
            <li><a href="https://www.instagram.com/indoor_weirdo?igsh=MXc4MjhvdTkyaWwyaA%3D%3D&utm_source=qr">Instagram</a></li>
            <li>|</li>
        </ul>
        <a name="Bottom"></a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.menu-toggle').addEventListener('click', function() {
                document.getElementById('main-menu').classList.toggle('show');
            });
        });
    </script>
    <script>
        const trees = document.querySelectorAll('#treeInt-1, #treeInt-2');
        trees.forEach(tree => {
            tree.addEventListener('click', () => {
                tree.classList.remove('hit');
                void tree.offsetWidth;
                tree.classList.add('hit');
                setTimeout(() => {
                    tree.classList.remove('hit');
                }, 300);
            });
        });
    </script>
</body>
</html>