 <script type="text/javascript" src="/assets/scripts/navbar.js"></script>
 <script type="text/javascript" src="/assets/scripts/heart.js"></script>
<script type="text/javascript" src="/assets/scripts/footer.js"></script>
<script src="/assets/scripts/main.js"></script>

<?php if(isset($_SESSION['user'])): ?>
<footer id="footer">
<!-- <i class="fab fa-facebook-square"></i> -->
    <a class="" href="/gallery.php"><i class="fas fa-image"></i></a>
    <a class="" href="/image.php"><i class="far fa-plus-square"></i></a>
    <a class="" href="/profile.php"><i class="far fa-user"></i></a>


</footer>
<?php endif; ?>
</body>
</html>
