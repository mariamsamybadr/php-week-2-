<?php

  // here we don't need to use else because if we didn't find the page which satisfy the condition we won't do anything

  $page = "About";

  if ($page == "About") {

    echo "This Is The Page";

  }

  echo '<br>';

  $title = "home ";

  if ($title == "") // if user didn't determine the title of page , we will determine this title in our if block code
   {

    echo "Unknown Page"; // our own title of page

  } else {

    echo $title;

  }

  echo '<br>';

  $lang = "Bangtan";

  if ($lang == "Arabic") {

    echo 'مرحبا';

  } elseif ($lang == "English") {

    echo 'Hello';

  } elseif ($lang == "Spanish") {

    echo 'Hola';

  } else {

    echo 'unknown language';

  }