<style>
    nav {
        display: flex;
        justify-content: space-between;
        padding: 15px 5%;
        align-items: center;
        background: #18283B;
    }

    .logo {
        color: #FFF;
        font-size: 22px;
    }

    ul {
        list-style: none;
    }

    ul li {
        display: inline-block;
    }

    ul li a {
        text-decoration: none;
        color: #8291A5;
        padding: 8px 30px;
        border-radius: 7px;
        transition: all .3s ease;
    }

    ul li a:hover,
    ul li a.active {
        color: #FFF;
        background-color: #ffc451;
    }

    #icon {
        background-color: #0075FF;
        padding: 5px 7px 3px 7px;
        border-radius: 4px;
        cursor: pointer;
        transition: all .3s ease;
    }

    #icon svg {
        color: #FFF;
        height: 28px;
        transition: all .3s ease;
    }

    #icon:hover {
        border-color: #ffc451;
    }

    #icon:hover svg {
        color: #0075FF;
    }

    #checkbox,
    #icon {
        display: none;
    }

    @media screen and (max-width: 768px) {
        nav {
            border-bottom: 1px solid #455468;
        }

        ul {
            position: absolute;
            width: 100%;
            height: calc(100vh - 71px);
            background-color: #18283B;
            left: 0;
            top: 0;
            text-align: center;
            display: none;
            margin-top: 71px;
        }

        ul li {
            display: block;
            padding: 10px 15px;
        }

        ul li a {
            display: block;
            padding: 10px 0;
        }

        #icon {
            display: block;
        }

        #checkbox:checked~ul {
            display: block;
        }
    }
</style>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<nav>
    <div class="logo">BHealthy</div>
    <input type="checkbox" id="checkbox">
    <label for="checkbox" id="icon">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </label>
    <ul>
        <li><a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a></li>
        <li><a href="Add.php" class="<?= ($activePage == 'Add') ? 'active' : ''; ?>">Track Calories</a></li>
        <li><a href="addexercise.php" class="<?= ($activePage == 'addexercise') ? 'active' : ''; ?>">Make Your
                Workout</a>
        </li>
        <li><a href="oldcalories.php" class="<?= ($activePage == 'oldcalories') ? 'active' : ''; ?>">Old Calorie
                records</a></li>
        <li><a href="signout.php">SignOut</a></li>
    </ul>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>