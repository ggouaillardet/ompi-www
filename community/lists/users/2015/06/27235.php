<?
$subject_val = "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 20:42:56 2015" -->
<!-- isoreceived="20150701004256" -->
<!-- sent="Wed, 01 Jul 2015 00:42:51 +0000" -->
<!-- isosent="20150701004251" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp;amp; GDR Huge Memory Leak" -->
<!-- id="px1jsmx69hvvedjg60oayad2.1435711369860_at_email.android.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="85817096f36b4a18819afbdede231248_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak<br>
<strong>From:</strong> Steven Eliuk (<em>s.eliuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 20:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ramps up over time, we had a bunch of locked up nodes over the weekend and have traced it back to this.
<br>
<p>Let me see if I can share more details,
<br>
<p>I will review with everyone tomorrow and get back to you,
<br>
<p><p><p>Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><p>Hi Steven,
<br>
Thanks for the report.  Very little has changed between 1.8.5 and 1.8.6 within the CUDA-aware specific code so I am perplexed.  Also interesting that you do not see the issue with 1.8.5 and CUDA 7.0.
<br>
You mentioned that it is hard to share the code on this but maybe you could share how you observed the behavior.  Does the code need to run for a while to see this?
<br>
Any suggestions on how I could reproduce this?
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><p>From: Steven Eliuk [mailto:s.eliuk_at_[hidden]]
<br>
Sent: Tuesday, June 30, 2015 6:05 PM
<br>
To: Rolf vandeVaart
<br>
Cc: Open MPI Users
<br>
Subject: 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak
<br>
<p>Hi All,
<br>
<p>Looks like we have found a large memory leak,
<br>
<p>Very difficult to share code on this but here are some details,
<br>
<p>1.8.5 w/ Cuda 7.0 &#151; no memory leak
<br>
1.8.5 w/ cuda 6.5 &#151; no memory leak
<br>
1.8.6 w/ cuda 7.0 &#151; large memory leak
<br>
1.8.5 w/ cuda 6.5 &#151; no memory leak
<br>
mvapich2 2.1 GDR &#151; no issue on either flavor of CUDA.
<br>
<p>We have a relatively basic program that reproduces the error and have even narrowed it back to a single machine w/ multiple gpus and only two slaves. Looks like something in the IPC within a single node,
<br>
<p>We don&#146;t have many free cycles at the moment but less us know if we can help w/ something basic,
<br>
<p>Heres our config flag for 1.8.5,
<br>
<p>./configure FC=gfortran --without-mx --with-openib=/usr --with-openib-libdir=/usr/lib64/ --enable-openib-rdmacm --without-psm --with-cuda=/cm/shared/apps/cuda70/toolkit/current --prefix=/cm/shared/OpenMPI_1_8_5_CUDA70
<br>
<p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk, Ph.D. Comp Sci,
<br>
Project Lead,
<br>
Computing Science Innovation Center,
<br>
SRA - SV,
<br>
Samsung Electronics,
<br>
665 Clyde Avenue,
<br>
Mountain View, CA 94043,
<br>
Work: +1 650-623-2986,
<br>
Cell: +1 408-819-4407.
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
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
