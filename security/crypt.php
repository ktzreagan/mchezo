<?php
function encrypt(string $word):string
{
   return(
       md5(
       md5(
           md5(
               md5(
                   md5(
                       md5(
                    $word
                   )
                   )
               )
         )
        )
    )
);
}


