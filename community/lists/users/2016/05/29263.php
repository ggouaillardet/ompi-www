<?
$subject_val = "Re: [OMPI users] MPI_Put/Get with many nested derived type";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 12:08:19 2016" -->
<!-- isoreceived="20160521160819" -->
<!-- sent="Sun, 22 May 2016 01:08:15 +0900" -->
<!-- isosent="20160521160815" -->
<!-- name="Akihiro Tabuchi" -->
<!-- email="tabuchi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Put/Get with many nested derived type" -->
<!-- id="574087EF.4000308_at_hpcs.cs.tsukuba.ac.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5vP+91CxSqBEE+_xNcfhesVqvRO==eBEQjbQbY8_4hFqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Put/Get with many nested derived type<br>
<strong>From:</strong> Akihiro Tabuchi (<em>tabuchi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 12:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29264.php">Andrea Negri: "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5"</a>
<li><strong>Previous message:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>In reply to:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Thanks for your quick response and patch.
<br>
<p>After applying the patch to 1.10.2, the test code and our program which uses nested hvector type ran 
<br>
without error.
<br>
I hope the patch will be applied to future releases.
<br>
<p>Regards,
<br>
Akihiro
<br>
<p>On 2016/05/21 23:15, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Here are attached two patches (one for master, one for v1.10)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please consider these as experimental ones :
</span><br>
<span class="quotelev1">&gt; - they cannot hurt
</span><br>
<span class="quotelev1">&gt; - they might not always work
</span><br>
<span class="quotelev1">&gt; - they will likely allocate a bit more memory than necessary
</span><br>
<span class="quotelev1">&gt; - if something goes wrong, it will hopefully be caught soon enough in
</span><br>
<span class="quotelev1">&gt; a new assert clause
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, May 21, 2016 at 9:19 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Tabuchi-san,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is indeed a bug i was able to reproduce on my linux laptop (for
</span><br>
<span class="quotelev2">&gt;&gt; some unknown reasons, there is no crash on OS X )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_pack_description_length malloc 88 bytes for the datatype
</span><br>
<span class="quotelev2">&gt;&gt; description, but 96 bytes are required.
</span><br>
<span class="quotelev2">&gt;&gt; this causes a memory corruption with undefined side effects (crash in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_free, or in MPI_Win_unlock)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iirc, we made some changes to ensure  data is always aligned (Sparc
</span><br>
<span class="quotelev2">&gt;&gt; processors require this), and we could have missed
</span><br>
<span class="quotelev2">&gt;&gt; some stuff, and hence malloc less bytes than required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, May 21, 2016 at 5:50 PM, Akihiro Tabuchi
</span><br>
<span class="quotelev2">&gt;&gt; &lt;tabuchi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At OpenMPI 1.10.2, MPI_Type_free crashes with a many nested derived type after using MPI_Put/Get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the datatype as target_datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test code is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the code, MPI_Type_free crashes if N_NEST &gt;= 4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This problem occurs at OpenMPI 1.8.5 or later.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no problem at OpenMPI 1.8.4, MPICH 3.2, and MVAPICH 2.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know about the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Akihiro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Akihiro Tabuchi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPCS Lab, Univ. of Tsukuba
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tabuchi_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29260.php">http://www.open-mpi.org/community/lists/users/2016/05/29260.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29262.php">http://www.open-mpi.org/community/lists/users/2016/05/29262.php</a>
</span><br>
<p><p><pre>
-- 
Akihiro Tabuchi
HPCS Lab, Univ. of Tsukuba
tabuchi_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29264.php">Andrea Negri: "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5"</a>
<li><strong>Previous message:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>In reply to:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
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
