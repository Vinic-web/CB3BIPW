		
	</main> <!-- /container -->

<footer class="container">
    <?php $data = new Datetime("now", new DateTimeZone("America/Sao_Paulo"))?>
    <p>&copy;2024 a <?php echo $data->format("Y"); ?> - Vinícius Firmino e Antonio Ferreira</p>
</footer>

    <script src="<?php echo BASEURL; ?>s/jquery-3.7.1.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/main.js"></script>

</body>
</html>