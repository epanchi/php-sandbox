<?php

interface ComputerAbstractFactory {
    /**
    * @return Tablet
    */
    function createTablet();
    /**
    * @return Phone
    */
    function createPhone();
    /**
    * @return Computer
    */
    function createComputer();
}

class AppleComputerFactory implements ComputerAbstractFactory {}

class SamsungComputerFactory implements ComputerAbstractFactory {}

class IPad implements Tablet {}

class GalaxyTab implements Tablet {}
