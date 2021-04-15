<?php
require 'includes/header.php';

?>


<body>
<link rel="stylesheet" href="css/welcome.css">
    

    <div class='console-container'><span id='text'></span>
        <div class='console-underscore' id='console'>&#95;</div>
    </div>

    <script type="text/javascript" src="/js/welcome.js"></script>

    

    <meta http-equiv = "refresh" content = "23; url = login.php" />
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js'></script>

<!-- This brings in the ability to load custom 3D objects in the .gltf file format. Blender allows the ability to export to this format out the box -->
<script src='https://cdn.jsdelivr.net/gh/mrdoob/Three.js@r92/examples/js/loaders/GLTFLoader.js'></script>