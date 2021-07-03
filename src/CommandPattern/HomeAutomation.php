<?php

namespace App\CommandPattern;

use App\CommandPattern\RemoteControl;
use App\CommandPattern\Devices\TV;
use App\CommandPattern\Devices\Light;
use App\CommandPattern\Devices\Stereo;
use App\CommandPattern\Devices\CeilingLight;
use App\CommandPattern\Commands\MacroCommand;
use App\CommandPattern\Commands\LightOnCommand;
use App\CommandPattern\Commands\LightOffCommand;
use App\CommandPattern\Commands\CeilingLightOnCommand;
use App\CommandPattern\Commands\CeilingLightDimCommand;
use App\CommandPattern\Commands\CeilingLightOffCommand;
use App\CommandPattern\Commands\StereoOnWithCDCommand;
use App\CommandPattern\Commands\StereoOnWithDVDCommand;
use App\CommandPattern\Commands\StereoOnWithRadioCommand;
use App\CommandPattern\Commands\StereoOffCommand;
use App\CommandPattern\Commands\TVOnCommand;
use App\CommandPattern\Commands\TVOffCommand;

class HomeAutomation
{
    public function __construct()
    {
        $remoteControl = new RemoteControl();

        $light = new Light('Living Room');
        $ceilingLight = new CeilingLight('Living Room');
        $stereo = new Stereo('Living Room');
        $tv = new TV('Living Room');

        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);
        $ceilingLightOn = new CeilingLightOnCommand($ceilingLight);
        $ceilingLightDim = new CeilingLightDimCommand($ceilingLight);
        $ceilingLightOff = new CeilingLightOffCommand($ceilingLight);
        $stereoOnCD = new StereoOnWithCDCommand($stereo);
        $stereoOnDVD = new StereoOnWithDVDCommand($stereo);
        $stereoOnRadio = new StereoOnWithRadioCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);
        $tvOn = new TVOnCommand($tv);
        $tvOff = new TVOffCommand($tv);

        $partyOn = [$ceilingLightOn, $stereoOnRadio, $tvOn];
        $partyOff = [$ceilingLightOff, $stereoOff, $tvOff];

        $partyOnMarco = new MacroCommand($partyOn);
        $partyOffMacro = new MacroCommand($partyOff);

        $remoteControl->setCommand(0, $lightOn, $lightOff);
        $remoteControl->setCommand(1, $ceilingLightOn, $ceilingLightOff);
        $remoteControl->setCommand(2, $ceilingLightDim, $ceilingLightOff);
        $remoteControl->setCommand(3, $stereoOnCD, $stereoOff);
        $remoteControl->setCommand(4, $stereoOnDVD, $stereoOff);
        $remoteControl->setCommand(5, $stereoOnRadio, $stereoOff);
        $remoteControl->setCommand(6, $tvOn, $tvOff);
        $remoteControl->setCommand(7, $partyOnMarco, $partyOffMacro);

        // Light
        $remoteControl->onButtonWasPressed(0);
        $remoteControl->offButtonWasPressed(0);
        $remoteControl->undoButtonWasPushed();
        echo "\n";

        // Ceiling light
        $remoteControl->onButtonWasPressed(1);
        $remoteControl->offButtonWasPressed(1);
        $remoteControl->onButtonWasPressed(2);
        $remoteControl->undoButtonWasPushed();
        echo "\n";

        // Stereo
        $remoteControl->onButtonWasPressed(3);
        echo "\n";
        $remoteControl->onButtonWasPressed(4);
        echo "\n";
        $remoteControl->undoButtonWasPushed();
        echo "\n";
        $remoteControl->offButtonWasPressed(4);
        echo "\n";
        $remoteControl->undoButtonWasPushed();
        echo "\n";
        $remoteControl->onButtonWasPressed(5);
        echo "\n";
        $remoteControl->offButtonWasPressed(4);
        echo "\n";

        // TV
        $remoteControl->onButtonWasPressed(6);
        echo "\n";
        $remoteControl->offButtonWasPressed(6);
        echo "\n";
        $remoteControl->undoButtonWasPushed();
        echo "\n";

        // Party
        echo "Macro On\n";
        $remoteControl->onButtonWasPressed(7);
        echo "Macro Off\n";
        $remoteControl->offButtonWasPressed(7);
        echo "Macro Undo\n";
        $remoteControl->undoButtonWasPushed();
        echo "\n";
    }
}
