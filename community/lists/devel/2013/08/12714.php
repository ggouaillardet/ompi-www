<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 11 13:42:19 2013" -->
<!-- isoreceived="20130811174219" -->
<!-- sent="Sun, 11 Aug 2013 17:41:16 +0000" -->
<!-- isosent="20130811174116" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="CE2D2898.134BA%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="59A7BAD9-3BC8-4FE7-8C69-A5CCC33D059E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-11 13:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>Previous message:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12718.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12718.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph -
<br>
<p>I think those warnings are just because of when they last synced with the
<br>
trunk; it looks like they haven't updated in the last week, when those
<br>
(and some usnic fixes) went in.
<br>
<p>More concerning is the --enable-picky stuff and the disabling of SHMEM in
<br>
the right places.
<br>
<p>Brian
<br>
<p>On 8/11/13 11:24 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Turning off the enable_picky, I get it to compile with the following
</span><br>
<span class="quotelev1">&gt;warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;pget_elements_x_f.c:70: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt;'ompi_get_elements_x_f'
</span><br>
<span class="quotelev1">&gt;pstatus_set_elements_x_f.c:70: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt;'ompi_status_set_elements_x_f'
</span><br>
<span class="quotelev1">&gt;ptype_get_extent_x_f.c:69: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt;'ompi_type_get_extent_x_f'
</span><br>
<span class="quotelev1">&gt;ptype_get_true_extent_x_f.c:69: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt;'ompi_type_get_true_extent_x_f'
</span><br>
<span class="quotelev1">&gt;ptype_size_x_f.c:69: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt;'ompi_type_size_x_f'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I also found that OpenShmem is still building by default. Is that
</span><br>
<span class="quotelev1">&gt;intended? I thought you were only going to build if --with-shmem (or
</span><br>
<span class="quotelev1">&gt;whatever option) was given.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Looks like some cleanup is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 10, 2013, at 8:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I couldn't get it to build - this is on a simple Xeon-based
</span><br>
<span class="quotelev2">&gt;&gt;system under CentOS 6.2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda_getreq.c: In function 'mca_spml_yoda_get_completion':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda_getreq.c:98: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt;'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt;'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda_getreq.c:98: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda_putreq.c: In function 'mca_spml_yoda_put_completion':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda_putreq.c:81: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt;'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt;'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda_putreq.c:81: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [spml_yoda_getreq.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [spml_yoda_putreq.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_put_internal':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:725: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt;'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt;'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:725: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_get':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:1107: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt;'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt;'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:1107: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [spml_yoda.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Only configure arguments:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; enable_picky=yes
</span><br>
<span class="quotelev2">&gt;&gt; enable_debug=yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2013, at 7:21 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/6/13 10:30 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OMPI Community,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please find on Bitbucket the latest round of OSHMEM changes based on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; community feedback. Please git and test at your leisure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In general, I think everything looks ok.  However, the &quot;right&quot; thing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't happen if the CM PML is used (at least, when using the Portals
</span><br>
<span class="quotelev3">&gt;&gt;&gt;4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTL).  When configured with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-mca-no-build=pml-ob1,pml-bfo,pml-v,btl,bml,mpool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The build segfaults trying to run a SHMEM program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 ./bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90397] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90397] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90397] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90397] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90398] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90398] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90398] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90398] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90397] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90397] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90398] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shannon:90398] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 90398 on node shannon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;exited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>Previous message:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12718.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12718.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
