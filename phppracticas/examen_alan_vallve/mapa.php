<!DOCTYPE html>
<html>
    <head>
        <script src="javascript/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=ca"></script>
        <script src="javascript/gmap3.min.js" type="text/javascript"></script>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $addr = $_GET["addr"];
        echo $addr;
        
        ?>
        <div id="mapa2" style="width: 300px; height:300px;"></div>
        <script>
            $(document).ready(init);
            function init() {
                $('#mapa2').gmap3(
                        {map: {
                                options: {
                                    zoom: 5
                                }
                            },
                            marker: {
                                values: [
                                    {address: "<?php echo $addr ?>"
                                        , data: "<h3>Titulo</h3><div><?php echo $addr ?></div>"
                                    }
                                ],
                                //podem definir una serie de events sobre les marques
                                events: {
                                    //Al clicar obrim una finestra sobre la marca i hi insertem el data de la marca
                                    click: function (marker, event, context) {
                                        var map = $(this).gmap3("get"), infowindow = $(this).gmap3({get: {name: "infowindow"}}); //obtenim el mapa

                                        if (infowindow) {
                                            infowindow.open(map, marker);   //obrim la marca
                                            infowindow.setContent(context.data);    //dins la finestra mostrem el atribut data de la marca
                                        } else {
                                            $(this).gmap3({
                                                infowindow: {//alternativa a la acció anterior
                                                    anchor: marker,
                                                    options: {content: context.data}
                                                }
                                            });
                                        }
                                    }
                                }
                             }, autofit:{}
                        }
                );
            }
        </script>
    </body>
</html>
