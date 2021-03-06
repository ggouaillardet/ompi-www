<?
$subject_val = "[hwloc-devel] xml file load incompatibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 17:32:58 2013" -->
<!-- isoreceived="20130920213258" -->
<!-- sent="Fri, 20 Sep 2013 14:32:54 -0700" -->
<!-- isosent="20130920213254" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] xml file load incompatibilities" -->
<!-- id="B8143CF1-1402-41A7-89C2-EE044496CE3B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [hwloc-devel] xml file load incompatibilities<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 17:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3881.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Previous message:</strong> <a href="3879.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5812)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3881.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Reply:</strong> <a href="3881.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I've run across a rather strange behavior. We have two branches in OMPI - the devel trunk (using hwloc v1.7.2) and our feature release series (using hwloc 1.5.2). I have found the following:
<br>
<p>*the feature series can correctly load an xml file generated by lstopo of versions 1.5 or greater
<br>
<p>* the devel series can correctly load an xml file generated by lstopo of versions 1.7 or greater, but not files generated by prior versions. In the latter case, I segfault as soon as I try to use the loaded topology.
<br>
<p>Any ideas why the discrepancy? Can I at least detect the version used to create a file when loading it so I can error out instead of segfaulting?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3881.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Previous message:</strong> <a href="3879.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5812)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3881.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Reply:</strong> <a href="3881.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
