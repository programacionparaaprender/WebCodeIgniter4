
    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row">

            <div class="col-seven md-six tab-full popular">
                <h3>Popular Posts</h3>
                <div class="block-1-2 block-m-full popular__posts">

                <?php
                        $db = \Config\Database::connect();
                        $query = $db->query("select * from posts where show_home=1");
                        $result = $query->getResult();
                        foreach($result as $p){
                            $url = base_url() ;
                            //echo '<li><a href="'.base_url().'/Category/'.$r->id.'">'.$r->name.'</a></li>';
                            echo '<article class="col-block popular__post">';
                            echo '<a href='.$url.'/public/Posts/'.$p->id.'" class="popular__thumb">';
                            
                            echo '<img src="'.$url.'/public/uploads/'.$p->banner.'" alt="">';
                            echo '</a>';
                            echo '<h5>'.$p->title.'.</h5>';
                            echo '<section class="popular__meta">';
                            echo '<span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>';
                            echo '<span class="popular__date"><span>on</span> <time datetime="'.$p->created_at.'">'.date('d-m-Y',strtotime($p->created_at)).'</time></span>';
                            echo '</section>';
                            echo '</article>';
                ?>


                <?php
                        }
                ?>
                </div>

                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->

            <div class="col-four md-six tab-full end">
                <div class="row">
                    <div class="col-six md-six mob-full categories">
                        <h3>Categories</h3>
        
                        <ul class="linklist">
                            <?php
                            $db = \Config\Database::connect();
                            $query = $db->query("select * from categories");
                            $result = $query->getResult();
                            foreach($result as $r){
                                echo '<li><a href="'.base_url().'/Category/'.$r->id.'">'.$r->name.'</a></li>';
                            }
                            ?>
                        </ul>
                    </div> <!-- end categories -->
        
                    <div class="col-six md-six mob-full sitelinks">
                        <h3>Site Links</h3>
        
                        <ul class="linklist">
                            <li><a href="<?= base_url() ?>/public/Home">Home</a></li>
                            <li><a href="<?= base_url() ?>/public/Home">Blog</a></li>
                        </ul>
                    </div> <!-- end sitelinks -->
                </div>
            </div>
        </div> <!-- end row -->

    </section> <!-- end s-extra -->
    
    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-six tab-full s-footer__about">
                        
                    <h4>About Wordsmith</h4>

                    <p>Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at. 
                    Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur.
                    Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error 
                    temporibus magnam est voluptatem.</p>

                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                    <form 
                            
                            id="mc-form" 
                            class="group" 
                            method="post"
                            novalidate="true">
                            <input 
                                type="email" 
                                value="" 
                                name="email" 
                                class="email" 
                                id="mc-email" 
                                placeholder="Email Address" 
                                required="">
                
                            <button 
                                onclick="fSend()"
                                type="button" 
                                name="subscribe">
                                Send
                            </button>
                            <!-- <input 
                                type="reset" 
                                name="cleaner" 
                                value="Reset"> -->
                            <label 
                                for="mc-email" 
                                class="subscribe-message" 
                                style="color:white;font-zise:25pt;">

                            </label>
                
                        </form>
                        <!-- <form 
                            action="colocarcodeigniter/public/Home/add_newsletter" 
                            id="mc-form" 
                            class="group" 
                            method="post"
                            novalidate="true">
                            <input 
                                type="email" 
                                value="" 
                                name="email" 
                                class="email" 
                                id="mc-email" 
                                placeholder="Email Address" 
                                required="">
                
                            <input 
                                type="submit" 
                                name="subscribe" 
                                value="Send">
                                 <label for="mc-email" class="subscribe-message">

                            </label>
                
                        </form> 
                             -->
                           
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-six">
                    <div class="s-footer__copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->

    <script type="text/javascript">
    async function postData(url = '', data = {}) {
        // Default options are marked with *
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        });
        return response.json(); // parses JSON response into native JavaScript objects
    }
    async function postData2(url = '', data = {}) {
        // Default options are marked with *
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'no-cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        });
        return response; // parses JSON response into native JavaScript objects
    }
    async function fSend() {
        try{
            var mail = document.getElementById("mc-email");
            var postData = new FormData();
            postData.append('email', mail.value);
            const response = await axios.post("<?= base_url() ?>/public/Home/add_newsletter2",postData);
            console.log(response);
            var x = document.getElementsByClassName("subscribe-message")[0];
            if(response.status == 200){
                x.innerText = response.data;
            }
            
        }catch(error){
            console.log(error)
        }
    }
       
    function fSendAntiguo2(){
            //console.log("Se ha enviado correo");
            var mail = document.getElementById("mc-email");
            //const mail = document.querySelector('#mc-email'); 
            postData2("<?= base_url() ?>/public/Home/add_newsletter2",{
                email: mail.value
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                var x = document.getElementsByClassName("subscribe-message");
                x.value = data;
            }).catch(err => {
                console.log(err);
                // code to handle request errors
            });
            
        }
       function fSendAntiguo(){
            //console.log("Se ha enviado correo");
            //var mail = document.getElementById("mc-email");
            const mail = document.querySelector('#mc-email'); 
            fetch("<?= base_url() ?>/public/Home/add_newsletter2",{
                email: mail.value
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                var x = document.getElementsByClassName("subscribe-message");
                x.value = data;
            }).catch(err => {
                console.log(err);
                // code to handle request errors
            });
            /* $.post("codeigniterurl/public/Home/add_newsletter2",{
                email: email.value
            }).done(function(data){
                var x = document.getElementsByClassName("subscribe-message");
                x.value = data;
            }); */
            
        }
    </script>


</body>

</html>