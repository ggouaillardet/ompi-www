<?
$subject_val = "Re: [OMPI users] Question on MPMD runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 30 12:09:48 2013" -->
<!-- isoreceived="20130530160948" -->
<!-- sent="Thu, 30 May 2013 09:09:41 -0700" -->
<!-- isosent="20130530160941" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPMD runs" -->
<!-- id="2C71979A-7134-4F57-8B74-94F15EB90544_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375D60C77B8F_at_UWMBX01.uw.lu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPMD runs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-30 12:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21993.php">Hodgess, Erin: "[OMPI users] trying to install Open MPI 1.6.4 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>In reply to:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21994.php">George Bosilca: "Re: [OMPI users] Question on MPMD runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 30, 2013, at 8:55 AM, Victor Vysotskiy &lt;victor.vysotskiy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca orte_abort_non_zero_exit 0 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the hint. That it is exactly what I need! BTW, does it help if one of the working node occasionally dies during the MPMD run?
</span><br>
<p>I'm afraid not - failure of a node is a terminating condition. There has been work done on running thru such conditions IF the application isn't using MPI, but I don't think that work has been fully ported to the 1.7 or trunk yet. Hopefully not too far in the future.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Victor.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21993.php">Hodgess, Erin: "[OMPI users] trying to install Open MPI 1.6.4 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>In reply to:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21994.php">George Bosilca: "Re: [OMPI users] Question on MPMD runs"</a>
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
