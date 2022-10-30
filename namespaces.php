<?php
//Namespace can be used in this way also
namespace MyProject {

function connect() { echo "ONE";  }
    Sub\Level\connect();
}

namespace MyProject\Sub {
   
function connect() { echo "TWO";  }
    Level\connect();
}

namespace MyProject\Sub\Level {
   
    function connect() { echo "THREE";  }   
    \MyProject\Sub\Level\connect(); // OR we can use this as below
    connect();
}
