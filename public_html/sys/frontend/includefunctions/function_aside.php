<?php
$time_as_end = strtotime("-60 day");
$true_as_date_end = date("Y-m-d", $time_as_end);

// для c4 хроник
$sum_c4 = 0;
$ative_c4 = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside  = $link->status;
	}
    if (($link->chronicle == 'C4') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_c4 += $link;
    }
}

if ($sum_c4 <= 0) {
    $ative_c4 = 'aside__item-not-active';
}

// для интерлюд хроник
$sum_in = 0;
$ative_in = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Interlude') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_in += $link;
    }
}

if ($sum_in <= 0) {
    $ative_in = 'aside__item-not-active';
}

// для  интерлюд с доп хроник
$sum_ind = 0;
$ative_ind = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Interlude') && ($link->icon_dp !=  NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_ind += $link;
    }
}

if ($sum_ind <= 0) {
    $ative_ind = 'aside__item-not-active';
}

// для епилог хроник
$sum_ep = 0;
$ative_ep = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Epilogue') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_ep += $link;
    }
}

if ($sum_ep <= 0) {
    $ative_ep = 'aside__item-not-active';
}

// для финал хроник
$sum_fi = 0;
$ative_fi = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Gracia Final') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_fi += $link;
    }
}

if ($sum_fi <= 0) {
    $ative_fi = 'aside__item-not-active';
}

// для фрея хроник
$sum_fre = 0;
$ative_fre = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Freya') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_fre += $link;
    }
}

if ($sum_fre <= 0) {
    $ative_fre = 'aside__item-not-active';
}

// для хф хроник
$sum_hf = 0;
$ative_hf = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'High Five') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_hf += $link;
    }
}

if ($sum_hf <= 0) {
    $ative_hf = 'aside__item-not-active';
}

// для классик хроник
$sum_cl = 0;
$ative_cl = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Classic') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_cl += $link;
    }
}

if ($sum_cl <= 0) {
    $ative_cl = 'aside__item-not-active';
}

// для год хроник
$sum_god = 0;
$ative_god = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'GoD') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_god += $link;
    }
}

if ($sum_god <= 0) {
    $ative_god = 'aside__item-not-active';
}

// для линдвиор хроник
$sum_lin = 0;
$ative_lin = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Lindvior') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_lin += $link;
    }
}

if ($sum_lin <= 0) {
    $ative_lin = 'aside__item-not-active';
}

// для артея хроник
$sum_ert = 0;
$ative_ert = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Ertheia') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_ert += $link;
    }
}

if ($sum_ert <= 0) {
    $ative_ert = 'aside__item-not-active';
}

// для одисей хроник
$sum_od = 0;
$ative_od = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Odyssey') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_od += $link;
    }
}

if ($sum_od <= 0) {
    $ative_od = 'aside__item-not-active';
}

// для хелиос хроник
$sum_hel = 0;
$ative_hel = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Helios') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_hel += $link;
    }
}

if ($sum_hel <= 0) {
    $ative_hel = 'aside__item-not-active';
}

// для крусейд хроник
$sum_cru = 0;
$ative_cru = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Gr.Crusade') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_cru += $link;
    }
}

if ($sum_cru <= 0) {
    $ative_cru = 'aside__item-not-active';
}

// для салватион хроник
$sum_sal = 0;
$ative_sal = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Salvation') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_sal += $link;
    }
}

if ($sum_sal <= 0) {
    $ative_sal = 'aside__item-not-active';
}

// орфен хнроники
$sum_or = 0;
$ative_or = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Orfen') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_or += $link;
    }

}

if ($sum_or <= 0) {
    $ative_or = 'aside__item-not-active';
}

// фуфарион хнроники
$sum_fuf = 0;
$ative_fuf = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Fafurion') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_fuf += $link;
    }

}

if ($sum_fuf <= 0) {
    $ative_fuf = 'aside__item-not-active';
}

// гомункулс хнроники
$sum_gom = 0;
$ative_gom = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Homunculus') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_gom += $link;
    }

}

if ($sum_gom <= 0) {
    $ative_gom = 'aside__item-not-active';
}

// прелюд хнроники
$sum_pre = 0;
$ative_pre = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->chronicle == 'Prelude') && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_pre += $link;
    }

}

if ($sum_pre <= 0) {
    $ative_pre = 'aside__item-not-active';
}

// rvr
$sum_rvr = 0;
$ative_rvr = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->icon_rvr != NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_rvr += $link;
    }

}

if ($sum_rvr <= 0) {
    $ative_rvr = 'aside__item-not-active';
}

// gve
$sum_gve = 0;
$ative_gve = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->icon_gve != NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_gve += $link;
    }

}

if ($sum_gve <= 0) {
    $ative_gve = 'aside__item-not-active';
}

// multiprof
$sum_mul = 0;
$ative_mul = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->icon_mul != NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_mul += $link;
    }

}

if ($sum_mul <= 0) {
    $ative_mul = 'aside__item-not-active';
}

// дополнения
$sum_dp = 0;
$ative_dp = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->icon_dp != NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_dp += $link;
    }

}

if ($sum_dp <= 0) {
    $ative_dp = 'aside__item-not-active';
}

// мультикрафт
$sum_kraft = 0;
$ative_kraft = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->icon_kraft != NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_kraft += $link;
    }

}

if ($sum_kraft <= 0) {
    $ative_kraft = 'aside__item-not-active';
}

// птс сервера
$sum_pts = 0;
$ative_pts = '';

foreach ($aside_link as $link) {
    if ($link->date_end < date('Y-m-d')) {
		$status_aside = 'wsimple_server';
	} else {
		$status_aside = $link->status;
	}
    if (($link->icon_pts != NULL) && (($link->date >= $true_as_date_end) || ($status_aside != 'wsimple_server'))) {
        $link = 1;
        $sum_pts += $link;
    }

}

if ($sum_pts <= 0) {
    $ative_pts = 'aside__item-not-active';
}
