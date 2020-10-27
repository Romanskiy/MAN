<footer>
    <div class="foot2">
        <ul class="foot" >
            <li><p>Права<p></li>
            <li>Офіційний сайт Гусятинської <br> філії <span style="text-transform: uppercase;"> Ман </span></li>
            <li>Гусятинський коледж</li>
            <li >Розробка Романський С.</li>
            <li>&copy; <?php echo date("Y");?> Усі права захищено</li>
        </ul>        
        <ul class="foot">
            <li><p>Адреса</p></li>
            <li>вул. Шевченка 3</li>
            <li>смт. Гусятин</li>
            <li>Україна</li>
            <li>48201</li>
        </ul>
        <ul class="foot">
            <li id="contact"><p>Контакти</p></li>

            <li><a href="tel:0355722776" style="text-decoration: none; color: #D2D2D2">(03557) 22776 </a></li>
            <li>(03557) 21838</li>
            <li><a href="mailto:manguscoll@gmail.com" style="text-decoration: none; color: #D2D2D2">manguscoll@gmail.com</a></li>
        </ul>
        <ul class="footsoc">
            <li id="contact_soc"><p>Соціальні мережі</p></li>

            <li class="soc"><a class="ft" href="" id="face">Facebook</a></li>
            <li class="soc"><a class="ft" href="" id="insta">Instagram</a></li>
            <li class="soc"><a class="ft" href="" id="twit">Twitter</a></li>     
        </ul>
    </div>
    <div class="foottext">
        <p >Розробка Романський С. <br> &copy; <?php echo date("Y");?> Усі права захищено</p>
        </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.pagination_list li a').each(function () {
            var location = window.location.href;
            var link = this.href; 
                if(location == link) {
                    $('.pagination_list li a').removeClass('active');
                    $(this).addClass('active');
                 }
             });    
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script  src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>
<script src="fotorama_up.js"></script>
</body>
</html>

