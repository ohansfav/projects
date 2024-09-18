<style>
    #scroll-container {
        width: 95%;
        margin: 0px auto;
        overflow: hidden;
        position: relative;

    }

    #scroll-text {
        height: 100%;
        text-align: center;
        /* animation properties */
        -moz-transform: translateY(100%);
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
        -moz-animation: my-animation 26s linear infinite;
        -webkit-animation: my-animation 26s linear infinite;
        animation: my-animation 26s linear infinite;
        animation-play-state: running;
        -webkit-animation-play-state: running;
        -moz-animation-play-state: running;
    }

    @-moz-keyframes my-animation {
        from {
            -moz-transform: translateY(100%);
        }

        to {
            -moz-transform: translateY(-100%);
        }
    }

    @-webkit-keyframes my-animation {
        from {
            -webkit-transform: translateY(100%);
        }

        to {
            -webkit-transform: translateY(-100%);
        }
    }

    @keyframes my-animation {
        from {
            -moz-transform: translateY(100%);
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
        }

        to {
            -moz-transform: translateY(-100%);
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
        }
    }

    #scroll-text:hover {

        animation-play-state: paused;
        -webkit-animation-play-state: paused;
        -moz-animation-play-state: paused;
    }

    #fadertop,
    #faderbottom {
        height: 100px;
        width: 100%;
        z-index: 20000;
        position: absolute;
    }

    #fadertop {
        top: 0px;
        background-image: -webkit-linear-gradient(#fff, #f5f5f500);
        background-image: -o-linear-gradient(#fff, #f5f5f500);
        background-image: linear-gradient(#fff, #f5f5f500);
        background-repeat: no-repeat;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#f5f5f500', GradientType=0);
        filter: none;
    }

    #faderbottom {
        bottom: 0px;
        background-image: -webkit-linear-gradient(#f5f5f500, #ffffffff);
        background-image: -o-linear-gradient(#f5f5f500, #ffffffff);
        background-image: linear-gradient(#f5f5f500, #ffffffff);
        background-repeat: no-repeat;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f500', endColorstr='#ffffffff', GradientType=0);
        filter: none;
    }

    #scroll-text h4 {
        font-weight: 900;
    }
</style>

<div id="scroll-container">
    <div id="fadertop"></div>
    <div id="faderbottom"></div>
    <div id="scroll-text">

        <div><img src="<?php echo base_url(); ?>/splash/images/logofmcsite.png" style="height:100px" class="img" /></div>
        <h2>FMC Asaba Store Manager</h2><br>
        <h5>Many thanks to the following without whom this application may not have been possible</h5>
        <br>
        <h4>Concept and Planning</h4>
        <p>Olorunfunmi Ajesi<br>Benjamin Yakubu</p>
        <h4>Research and Development Team</h4>
        <p>Benjamin Yakubu<br>Solomon Johnson<br>Ugochukwu Ochem<br>Kelvin Iyenoma<br>Jeffrey Okundia<br>Chukwuemeka Ogbudo<br>Chinweuju Obi<br>Ngozi Nwaoje<br>Dotun Farombi</p>
        <h4>Manual Authoring</h4>
        <p>Ugochukwu Ochem<br>Solomon Johnson<br>Chukwuemeka Ogbudo<br>Kelvin Iyenoma<br>Jeffrey Okundia<br>Dotun Farombi<br>Benjamin Yakubu</p>
        <h4>Support and Resources</h4>
        <p>Dr. Victor Osiatuma <br><small>(MD/CEO - FMC Asaba)</small><br>
            Mr. A Farombi <br><small>(Director of Administration - FMC Asaba)</small><br>
            Mr. Olorunfunmi Ajesi<br><small>(Head of Department, Store - FMC Asaba)</small><br>
        </p>
        <h5>Also, thanks to every member of the IT and Store departments for their support during the development period.</h5>

    </div>
</div>