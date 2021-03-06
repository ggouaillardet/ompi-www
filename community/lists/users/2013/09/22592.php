<?
$subject_val = "Re: [OMPI users] Able to run mpirun as root, but not as a user.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 06:26:43 2013" -->
<!-- isoreceived="20130903102643" -->
<!-- sent="Tue, 3 Sep 2013 12:26:32 +0200" -->
<!-- isosent="20130903102632" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Able to run mpirun as root, but not as a user." -->
<!-- id="CDB83B2F-4CB6-45A7-B237-84BC6DA914C6_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+cQX8YUmNoatvARs5-sAxKC5Hi3tc51P_Y+uw=wdUDFwNxg_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Able to run mpirun as root, but not as a user.<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 06:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>In reply to:</strong> <a href="22588.php">Ian Czekala: "[OMPI users] Able to run mpirun as root, but not as a user."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22594.php">Ian Czekala: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Reply:</strong> <a href="22594.php">Ian Czekala: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 03.09.2013 um 06:48 schrieb Ian Czekala:
<br>
<p><span class="quotelev1">&gt; Dear openmpi users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My basic problem is that I am able to run mpirun as root, but not at a user level. I have tried installing openmpi via several methods, but all seem to yield the same problem. I fear that I am missing something very basic and zero-order, but I can't seem to resolve my problem with the information in the FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Originally, I installed the openmpi through arch linux's package manager, pacman. After a successful install, I tried (on my laptop)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 /bin/pwd
</span><br>
<span class="quotelev1">&gt; and I get the following output:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev1">&gt; Node: leo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however when I run as root, I am sucessful
</span><br>
<span class="quotelev1">&gt; $ sudo mpirun -np 2 /bin/pwd
</span><br>
<span class="quotelev1">&gt; /home/ian
</span><br>
<span class="quotelev1">&gt; /home/ian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After doing some searching on the web (and coming across this thread),
</span><br>
<p>There is another one:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/03/12291.php">http://www.open-mpi.org/community/lists/users/2010/03/12291.php</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I suspected that the issue might be with some PATH setup or user permissions that weren't being set correctly by the arch linux package manager, and so I uninstalled and resorted to installing by source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When trying the normal install method 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/usr/local/openmpi
</span><br>
<span class="quotelev1">&gt; $ make all
</span><br>
<span class="quotelev1">&gt; $ sudo make install
</span><br>
<span class="quotelev1">&gt; and then changed my .zshrc to include the correct PATH and LD_LIBRARY_PATH, I get the same behavior as before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To investigate further the possibility of a permissions issue, I uninstalled and reinstalled into my own home directory 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/ian/.builds/openmpi
</span><br>
<span class="quotelev1">&gt; $ make all
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; and updated PATH and LD_LIBRARY_PATH correspondingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the behavior is *exactly* as before: mpirun will run as root, but not at a user level. Am I missing something extremely basic here? Online examples to me imply that I should be able to run as a user without any additional configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is some of the info asked for by the &quot;Getting Help&quot; section (all from the local home directory install):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ian_at_leo:~]$ sudo mpirun --bynode --tag-output ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:package:Open MPI ian_at_leo Distribution
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.6.5
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r28673
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:full:1.6.5
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:svn:r28673
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:full:1.6.5
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:svn:r28673
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ident:1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for any help or guidance you may be able to offer! Sincerely,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ian Czekala
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>In reply to:</strong> <a href="22588.php">Ian Czekala: "[OMPI users] Able to run mpirun as root, but not as a user."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22594.php">Ian Czekala: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Reply:</strong> <a href="22594.php">Ian Czekala: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
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
