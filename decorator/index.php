<?php
include_once 'loader.php';


$firstTuning = new ColorTuningService(new StyleTuningService(new StyleTuning()));
echo $firstTuning->getSummary();

echo "<br>";

$secondTuning = new DisksTuningService(new EngineTuningService(new ColorTuningService(new StyleTuningService(new FullTuning()))));
echo $secondTuning->getSummary();