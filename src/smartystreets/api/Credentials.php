<?php

namespace smartystreets\api;

interface Credentials {
    function sign(Request $request);
}