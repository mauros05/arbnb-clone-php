<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="assets/js/general.js"></script>
<?php if(isset($data["Url_Jquery"])){ ?>
    <script src="<?php echo $data["Url_Jquery"] ?>"></script>
<?php } ?>
    </body>
    <footer class="bg-dark text-center text-lg-start">
    <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            
            <a class="text-light" href="https://mdbootstrap.com/">© 2022 Copyright:  NXTCode.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</html> 