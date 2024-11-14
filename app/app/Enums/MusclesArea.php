<?php

namespace App\Enums;

enum MusclesArea: string
{
    // Primary muscles
    case CHEST = 'chest';
    case SHOULDERS = 'shoulders';
    case TRICEPS = 'triceps';
    case BACK = 'back';
    case BICEPS = 'biceps';
    case QUADRICEPS = 'quadriceps';
    case GLUTES = 'glutes';
    case HAMSTRINGS = 'hamstrings';
    case CALVES = 'calves';
    case CORE = 'core';
    case LOWER_ABDOMINALS = 'lower_abdominals';
    case HIP_FLEXORS = 'hip_flexors';
    case LOWER_BACK = 'lower_back';

    // Secondary muscles
    case FOREARMS = 'forearms';
    case ERRECTOR_SPINAE = 'erector_spinae';
    case TRAPEZIUS = 'trapezius';
    case TRANSVERSE_ABDOMINIS = 'transverse_abdominis';
    case OBLIQUES = 'obliques';
}
