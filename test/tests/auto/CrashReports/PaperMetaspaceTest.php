<?php

class PaperMetaspaceTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/crash-reports/paper-metaspace.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\CrashReport\PaperCrashReportLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---- Minecraft Crash Report ----
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => // Ouch. That hurt :(
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => COMMENT
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Time: 2/4/22, 3:40 AM
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Time:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Description: Exception in server tick loop
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Description:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.OutOfMemoryError: Metaspace
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:315)
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:320)
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1159)
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:482)
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ChunkTaskPriorityQueueSorter.lambda$message$1(ChunkTaskPriorityQueueSorter.java:58)
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.util.thread.ProcessorMailbox.pollTask(ProcessorMailbox.java:91)
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.util.thread.ProcessorMailbox.pollUntil(ProcessorMailbox.java:146)
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.util.thread.ProcessorMailbox.run(ProcessorMailbox.java:102)
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1136)
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635)
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.Thread.run(Thread.java:833)
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.OutOfMemoryError: Metaspace
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.ClassLoader.defineClass1(Native Method)
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.ClassLoader.defineClass(ClassLoader.java:1012)
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.security.SecureClassLoader.defineClass(SecureClassLoader.java:150)
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.net.URLClassLoader.defineClass(URLClassLoader.java:524)
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.net.URLClassLoader$1.run(URLClassLoader.java:427)
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.net.URLClassLoader$1.run(URLClassLoader.java:421)
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.security.AccessController.executePrivileged(AccessController.java:807)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.security.AccessController.doPrivileged(AccessController.java:712)
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.net.URLClassLoader.findClass(URLClassLoader.java:420)
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.ClassLoader.loadClass(ClassLoader.java:587)
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.lang.ClassLoader.loadClass(ClassLoader.java:520)
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.levelgen.feature.structures.JigsawPlacement.lambda$addPieces$0(JigsawPlacement.java:329)
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.levelgen.feature.structures.WorldGenFeatureDefinedStructureJigsawPlacement$$Lambda$9636/0x0000000801e3bd60.generatePieces(Unknown Source)
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.levelgen.feature.StructureFeature.generate(StructureFeature.java:239)
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.levelgen.feature.ConfiguredStructureFeature.generate(ConfiguredStructureFeature.java:36)
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.chunk.ChunkGenerator.createStructures(ChunkGenerator.java:492)
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.chunk.ChunkStatus.lambda$static$2(ChunkStatus.java:51)
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.chunk.ChunkStatus$$Lambda$2411/0x000000080124a610.doWork(Unknown Source)
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.level.chunk.ChunkStatus.generate(ChunkStatus.java:273)
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ChunkMap.lambda$scheduleChunkGeneration$35(ChunkMap.java:1226)
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.PlayerChunkMap$$Lambda$6414/0x0000000801f62978.apply(Unknown Source)
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.mojang.datafixers.util.Either$Left.map(Either.java:38)
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ChunkMap.lambda$scheduleChunkGeneration$37(ChunkMap.java:1224)
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.PlayerChunkMap$$Lambda$6412/0x0000000801f624f0.apply(Unknown Source)
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1150)
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:482)
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ChunkTaskPriorityQueueSorter.lambda$message$1(ChunkTaskPriorityQueueSorter.java:58)
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.level.ChunkTaskQueueSorter$$Lambda$6321/0x0000000801f45948.run(Unknown Source)
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.util.thread.ProcessorMailbox.pollTask(ProcessorMailbox.java:91)
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.util.thread.ProcessorMailbox.pollUntil(ProcessorMailbox.java:146)
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.util.thread.ProcessorMailbox.run(ProcessorMailbox.java:102)
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.base/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1136)
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => A detailed walkthrough of the error, its code path and all known details is as follows:
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---------------------------------------------------------------------------------------
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- System Details --
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version: 1.18.1
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Minecraft Version:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version ID: 1.18.1
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Minecraft Version ID:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Operating System: Linux (amd64) version 5.4.0-74-generic
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Operating System:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java Version: 17.0.1, Oracle Corporation
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Java Version:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode, sharing), Oracle Corporation
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Java VM Version:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Memory: 1291523560 bytes (1231 MiB) / 1975517184 bytes (1884 MiB) up to 2411724800 bytes (2300 MiB)
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Memory:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	CPUs: 3
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	CPUs:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Processor Vendor: GenuineIntel
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Processor Vendor:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Processor Name: Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Processor Name:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Identifier: Intel64 Family 6 Model 45 Stepping 7
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Identifier:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Microarchitecture: Sandy Bridge (Server)
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Microarchitecture:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Frequency (GHz): 2.20
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Frequency (GHz):
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Number of physical packages: 2
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Number of physical packages:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Number of physical CPUs: 16
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Number of physical CPUs:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Number of logical CPUs: 32
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Number of logical CPUs:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 name: unknown
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 name:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 vendor: unknown
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 vendor:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 VRAM (MB): 0.00
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 VRAM (MB):
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 deviceId: unknown
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 deviceId:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Graphics card #0 versionInfo: unknown
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Graphics card #0 versionInfo:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Virtual memory max (MB): 49338.91
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Virtual memory max (MB):
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Virtual memory used (MB): 75375.63
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Virtual memory used (MB):
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Swap memory total (MB): 1024.00
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Swap memory total (MB):
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Swap memory used (MB): 472.54
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Swap memory used (MB):
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	JVM Flags: 3 total; -XX:MaxMetaspaceSize=200M -Xmx2300M -Xms1150M
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	JVM Flags:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	CraftBukkit Information:
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	CraftBukkit Information:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    Running: Paper version git-Paper-185 (MC: 1.18.1) (Implementing API version 1.18.1-R0.1-SNAPSHOT) false
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] =>    Running:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    Plugins: { Warp v1.1* warp.Warp [Isaiah], SetHome v5.1.2* me.downthepark.sethome.SetHome [], SirBlobmanCore v2.3.4 com.github.sirblobman.api.core.CorePlugin [SirBlobman], Spit v1.2.0 me.funnycube.spit.Main [funnycube], SwearBlock v1.0* me.bukkit.DutchForce.SwearBlock [], EpicTrade v1.8.6 com.jowcey.EpicTrade.base.loader.SpigotLoader [Jowcey], ajAntiXray v1.8.1 us.ajg0702.antixray.Main [ajgeiss0702], ProjectileKnockback v1.9 com.gmail.excel8392.projectileknockback.ProjectileKnockback [], EnderChest vB 2.0* org.thelegitsociety.enderchest.Main [], Multiverse-Core v4.3.1-b861 com.onarandombox.MultiverseCore.MultiverseCore [dumptruckman, Rigby, fernferret, lithium3141, main--], Invs v1.0-SNAPSHOT at.kessapps.invs.Main [KEssApps], UltimateAntiBot v3.3 me.kr1s_d.ultimateantibot.spigot.UltimateAntibotSpigot [Kr1S_D], antiRedstoneClock v1.0.7 com.trafalcraft.antiRedstoneClock.Main [Amosar], PlayerReport v3.4.3 me.PCPSells.PRMain [PCPSells], NoMobLag v2.3.4 com.zenya.nomoblag.NoMobLag [Zenya4], SimpleRTP v2.4 me.sosparkly.SRTP [SoSparkly], CooldownsX v4.1.2 com.github.sirblobman.cooldowns.CooldownPlugin [SirBlobman], MOTD v2.3.7 com.yapzhenyie.motd.Motd [YapZhenYie], ViaVersion v4.1.1 com.viaversion.viaversion.ViaVersionPlugin [_MylesC, creeper123123321, Gerrygames, kennytv, Matsv], SilkTouchHands v1.0.11 com.visualcody.silktouchhands.main [visualcody], Multiverse-Portals v4.2.1-b834 com.onarandombox.MultiversePortals.MultiversePortals [Rigby, fernferret], SmoothTimber v1.19.0 com.syntaxphoenix.spigot.smoothtimber.SmoothTimber [SyntaxPhoenix IT-Solutions], floodgate v2.1.0-SNAPSHOT org.geysermc.floodgate.SpigotPlugin [GeyserMC], ClickTpa v1.5.1* me.jklmao.main.Main [], ViaBackwards v4.1.1 com.viaversion.viabackwards.BukkitPlugin [Matsv, kennytv, Gerrygames, creeper123123321, ForceUpdate1], LuckPerms v5.3.86 me.lucko.luckperms.bukkit.loader.BukkitLoaderPlugin [Luck], TabTPS v1.3.11 xyz.jpenilla.tabtps.spigot.TabTPSPlugin [jmp], ProtocolLib v4.7.0 com.comphenix.protocol.ProtocolLib [dmulloy2, comphenix], SkinsRestorer v14.1.10 net.skinsrestorer.bukkit.SkinsRestorer [Th3Tr0LLeR, McLive, DoNotSpamPls, knat, AlexProgrammerDE], DiscordSRV v1.24.0 github.scarsz.discordsrv.DiscordSRV [Scarsz, Androkai, Vankka], Geyser-Spigot v2.0.0-SNAPSHOT org.geysermc.geyser.platform.spigot.GeyserSpigotPlugin [GeyserMC], LoginSecurity v3.1* com.lenis0012.bukkit.loginsecurity.LoginSecurity [lenis0012], AntiCheatReloaded v1.10.3 com.rammelkast.anticheatreloaded.AntiCheatReloaded [Rammelkast],}
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] =>    Plugins:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    Warnings: DEFAULT
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] =>    Warnings:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    Reload Count: 0
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] =>    Reload Count:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>    Threads: { WAITING defaultEventLoopGroup-5-2: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Craft Scheduler Thread - 58: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING DiscordSRV - Presence Updater: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.PresenceUpdater.run(PresenceUpdater.java:109)], RUNNABLE Netty Epoll Server IO #1: [io.netty.channel.epoll.Native.epollWait0(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:176), io.netty.channel.epoll.EpollEventLoop.epollWait(EpollEventLoop.java:281), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:351), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Jolokia Agent Cleanup Thread: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.lang.Thread.join(Thread.java:1304), java.base@17.0.1/java.lang.Thread.join(Thread.java:1372), app//org.jolokia.jvmagent.CleanupThread.joinThreads(CleanupThread.java:110), app//org.jolokia.jvmagent.CleanupThread.run(CleanupThread.java:60)], TIMED_WAITING Paper Watchdog Thread: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), org.spigotmc.WatchdogThread.run(WatchdogThread.java:243)], TIMED_WAITING DiscordSRV - Channel Topic Updater: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.ChannelTopicUpdater.run(ChannelTopicUpdater.java:59)], RUNNABLE WebSocketConnectReadThread-116: [java.base@17.0.1/sun.nio.ch.SocketDispatcher.read0(Native Method), java.base@17.0.1/sun.nio.ch.SocketDispatcher.read(SocketDispatcher.java:47), java.base@17.0.1/sun.nio.ch.NioSocketImpl.tryRead(NioSocketImpl.java:261), java.base@17.0.1/sun.nio.ch.NioSocketImpl.implRead(NioSocketImpl.java:312), java.base@17.0.1/sun.nio.ch.NioSocketImpl.read(NioSocketImpl.java:350), java.base@17.0.1/sun.nio.ch.NioSocketImpl$1.read(NioSocketImpl.java:803), java.base@17.0.1/java.net.Socket$SocketInputStream.read(Socket.java:966), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.read(SSLSocketInputRecord.java:478), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.readHeader(SSLSocketInputRecord.java:472), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.bytesInCompletePacket(SSLSocketInputRecord.java:70), java.base@17.0.1/sun.security.ssl.SSLSocketImpl.readApplicationRecord(SSLSocketImpl.java:1455), java.base@17.0.1/sun.security.ssl.SSLSocketImpl$AppInputStream.read(SSLSocketImpl.java:1059), java.base@17.0.1/java.io.InputStream.read(InputStream.java:218), Geyser-Spigot.jar//org.java_websocket.client.WebSocketClient.run(WebSocketClient.java:505), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE Netty Epoll Server IO #3: [io.netty.channel.epoll.Native.epollWait(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:192), io.netty.channel.epoll.Native.epollWait(Native.java:185), io.netty.channel.epoll.EpollEventLoop.epollWaitNoTimerChange(EpollEventLoop.java:290), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:347), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Timer hack thread: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), net.minecraft.SystemUtils$5.run(SystemUtils.java:668)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Craft Async Scheduler Management Thread: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING ExpiringMap-Expirer: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING DiscordSRV - JDA Rate Limit: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1177), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING pool-24-thread-4: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE JolokiaDiscoveryListenerThread-172.20.0.21: [java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.receive0(Native Method), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.receiveIntoNativeBuffer(DatagramChannelImpl.java:750), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.receive(DatagramChannelImpl.java:728), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.trustedBlockingReceive(DatagramChannelImpl.java:666), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.blockingReceive(DatagramChannelImpl.java:635), java.base@17.0.1/sun.nio.ch.DatagramSocketAdaptor.receive(DatagramSocketAdaptor.java:240), java.base@17.0.1/java.net.DatagramSocket.receive(DatagramSocket.java:700), app//org.jolokia.discovery.MulticastSocketListenerThread.receiveMessage(MulticastSocketListenerThread.java:115), app//org.jolokia.discovery.MulticastSocketListenerThread.run(MulticastSocketListenerThread.java:72)], WAITING Finalizer: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.lang.ref.ReferenceQueue.remove(ReferenceQueue.java:155), java.base@17.0.1/java.lang.ref.ReferenceQueue.remove(ReferenceQueue.java:176), java.base@17.0.1/java.lang.ref.Finalizer$FinalizerThread.run(Finalizer.java:172)], TIMED_WAITING OkHttp ConnectionPool: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.lang.Object.wait(Object.java:472), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.ConnectionPool.lambda$new$0(ConnectionPool.java:66), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.ConnectionPool$$Lambda$7175/0x0000000802234db0.run(Unknown Source), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1136), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING DiscordSRV - JDA Callback 0: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkUntil(LockSupport.java:410), java.base@17.0.1/java.util.concurrent.ForkJoinPool.awaitWork(ForkJoinPool.java:1726), java.base@17.0.1/java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1623), java.base@17.0.1/java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:165)], WAITING pool-30-thread-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE Network Listener - #2: [io.netty.channel.epoll.Native.epollWait(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:192), io.netty.channel.epoll.Native.epollWait(Native.java:185), io.netty.channel.epoll.EpollEventLoop.epollWaitNoTimerChange(EpollEventLoop.java:290), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:347), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE JDA MainWS-ReadThread: [java.base@17.0.1/sun.nio.ch.Net.poll(Native Method), java.base@17.0.1/sun.nio.ch.NioSocketImpl.park(NioSocketImpl.java:181), java.base@17.0.1/sun.nio.ch.NioSocketImpl.timedRead(NioSocketImpl.java:285), java.base@17.0.1/sun.nio.ch.NioSocketImpl.implRead(NioSocketImpl.java:309), java.base@17.0.1/sun.nio.ch.NioSocketImpl.read(NioSocketImpl.java:350), java.base@17.0.1/sun.nio.ch.NioSocketImpl$1.read(NioSocketImpl.java:803), java.base@17.0.1/java.net.Socket$SocketInputStream.read(Socket.java:966), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.read(SSLSocketInputRecord.java:478), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.readHeader(SSLSocketInputRecord.java:472), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.bytesInCompletePacket(SSLSocketInputRecord.java:70), java.base@17.0.1/sun.security.ssl.SSLSocketImpl.readApplicationRecord(SSLSocketImpl.java:1455), java.base@17.0.1/sun.security.ssl.SSLSocketImpl$AppInputStream.read(SSLSocketImpl.java:1059), java.base@17.0.1/java.io.BufferedInputStream.fill(BufferedInputStream.java:244), java.base@17.0.1/java.io.BufferedInputStream.read1(BufferedInputStream.java:284), java.base@17.0.1/java.io.BufferedInputStream.read(BufferedInputStream.java:343), java.base@17.0.1/java.io.FilterInputStream.read(FilterInputStream.java:132), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.WebSocketInputStream.readBytes(WebSocketInputStream.java:165), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.WebSocketInputStream.readFrame(WebSocketInputStream.java:46), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.ReadingThread.readFrame(ReadingThread.java:338), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.ReadingThread.main(ReadingThread.java:99), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.ReadingThread.runMain(ReadingThread.java:64), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.WebSocketThread.run(WebSocketThread.java:45)], WAITING Worker-Main-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING pool-27-thread-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING luckperms-scheduler-worker-22: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING pool-24-thread-3: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1177), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING DiscordSRV - Server Watchdog: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.ServerWatchdog.run(ServerWatchdog.java:65)], WAITING Geyser Spigot connection thread-4-4: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE HTTP-Dispatcher: [java.base@17.0.1/sun.nio.ch.EPoll.wait(Native Method), java.base@17.0.1/sun.nio.ch.EPollSelectorImpl.doSelect(EPollSelectorImpl.java:118), java.base@17.0.1/sun.nio.ch.SelectorImpl.lockAndDoSelect(SelectorImpl.java:129), java.base@17.0.1/sun.nio.ch.SelectorImpl.select(SelectorImpl.java:141), platform/jdk.httpserver@17.0.1/sun.net.httpserver.ServerImpl$Dispatcher.run(ServerImpl.java:370), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE DestroyJavaVM: [], WAITING Geyser player thread-3-2: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING MVStore background writer nio:/server/plugins/LuckPerms/luckperms-h2.mv.db: [java.base@17.0.1/java.lang.Object.wait(Native Method), org.h2.mvstore.MVStore$BackgroundWriterThread.run(MVStore.java:3116)], TIMED_WAITING DiscordSRV - Nickname Updater: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.NicknameUpdater.run(NicknameUpdater.java:106)], TIMED_WAITING luckperms-scheduler-worker-30: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE Netty Epoll Server IO #2: [io.netty.channel.epoll.Native.epollWait0(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:176), io.netty.channel.epoll.EpollEventLoop.epollWait(EpollEventLoop.java:281), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:351), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING WebSocketWriteThread-193: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), floodgate-spigot.jar//org.java_websocket.client.WebSocketClient$WebsocketWriteThread.runWriteData(WebSocketClient.java:816), floodgate-spigot.jar//org.java_websocket.client.WebSocketClient$WebsocketWriteThread.run(WebSocketClient.java:799), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING pool-30-thread-3: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Log4j2-AsyncAppenderEventDispatcher-1-Async: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.ArrayBlockingQueue.take(ArrayBlockingQueue.java:420), org.apache.logging.log4j.core.appender.AsyncAppenderEventDispatcher.dispatchAll(AsyncAppenderEventDispatcher.java:71), org.apache.logging.log4j.core.appender.AsyncAppenderEventDispatcher.run(AsyncAppenderEventDispatcher.java:63)], RUNNABLE Server console handler: [java.base@17.0.1/java.io.FileInputStream.read0(Native Method), java.base@17.0.1/java.io.FileInputStream.read(FileInputStream.java:228), org.jline.terminal.impl.AbstractPty$PtyInputStream.read(AbstractPty.java:73), org.jline.utils.NonBlockingInputStream.read(NonBlockingInputStream.java:62), org.jline.utils.NonBlocking$NonBlockingInputStreamReader.read(NonBlocking.java:168), org.jline.utils.NonBlockingReader.read(NonBlockingReader.java:57), org.jline.keymap.BindingReader.readCharacter(BindingReader.java:160), org.jline.keymap.BindingReader.readBinding(BindingReader.java:110), org.jline.keymap.BindingReader.readBinding(BindingReader.java:61), org.jline.reader.impl.LineReaderImpl.doReadBinding(LineReaderImpl.java:923), org.jline.reader.impl.LineReaderImpl.readBinding(LineReaderImpl.java:956), org.jline.reader.impl.LineReaderImpl.readLine(LineReaderImpl.java:651), org.jline.reader.impl.LineReaderImpl.readLine(LineReaderImpl.java:468), net.minecrell.terminalconsole.SimpleTerminalConsole.readCommands(SimpleTerminalConsole.java:158), net.minecrell.terminalconsole.SimpleTerminalConsole.start(SimpleTerminalConsole.java:141), net.minecraft.server.dedicated.DedicatedServer$1.run(DedicatedServer.java:111)], TIMED_WAITING DiscordSRV - Console Message Queue Worker: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.ConsoleMessageQueueWorker.run(ConsoleMessageQueueWorker.java:104)], TIMED_WAITING Craft Scheduler Thread - 57: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Paper RegionFile IO Thread: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:211), com.destroystokyo.paper.io.QueueExecutorThread.run(QueueExecutorThread.java:97)], TIMED_WAITING ForkJoinPool.commonPool-worker-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkUntil(LockSupport.java:410), java.base@17.0.1/java.util.concurrent.ForkJoinPool.awaitWork(ForkJoinPool.java:1726), java.base@17.0.1/java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1623), java.base@17.0.1/java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:165)], TIMED_WAITING luckperms-scheduler-worker-29: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING ForkJoinPool.commonPool-worker-2: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.ForkJoinPool.awaitWork(ForkJoinPool.java:1724), java.base@17.0.1/java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1623), java.base@17.0.1/java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:165)], RUNNABLE Network Listener - #3: [io.netty.channel.epoll.Native.epollWait(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:192), io.netty.channel.epoll.Native.epollWait(Native.java:185), io.netty.channel.epoll.EpollEventLoop.epollWaitNoTimerChange(EpollEventLoop.java:290), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:347), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Craft Scheduler Thread - 46: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE OkHttp discord.com: [java.base@17.0.1/sun.nio.ch.Net.poll(Native Method), java.base@17.0.1/sun.nio.ch.NioSocketImpl.park(NioSocketImpl.java:181), java.base@17.0.1/sun.nio.ch.NioSocketImpl.park(NioSocketImpl.java:190), java.base@17.0.1/sun.nio.ch.NioSocketImpl.implRead(NioSocketImpl.java:314), java.base@17.0.1/sun.nio.ch.NioSocketImpl.read(NioSocketImpl.java:350), java.base@17.0.1/sun.nio.ch.NioSocketImpl$1.read(NioSocketImpl.java:803), java.base@17.0.1/java.net.Socket$SocketInputStream.read(Socket.java:966), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.read(SSLSocketInputRecord.java:478), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.readHeader(SSLSocketInputRecord.java:472), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.bytesInCompletePacket(SSLSocketInputRecord.java:70), java.base@17.0.1/sun.security.ssl.SSLSocketImpl.readApplicationRecord(SSLSocketImpl.java:1455), java.base@17.0.1/sun.security.ssl.SSLSocketImpl$AppInputStream.read(SSLSocketImpl.java:1059), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.Okio$2.read(Okio.java:140), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.AsyncTimeout$2.read(AsyncTimeout.java:237), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.RealBufferedSource.request(RealBufferedSource.java:72), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.RealBufferedSource.require(RealBufferedSource.java:65), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.internal.http2.Http2Reader.nextFrame(Http2Reader.java:95), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.internal.http2.Http2Connection$ReaderRunnable.execute(Http2Connection.java:608), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.internal.NamedRunnable.run(NamedRunnable.java:32), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Geyser Spigot connection thread-4-3: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING server-timer: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.util.TimerThread.mainLoop(Timer.java:563), java.base@17.0.1/java.util.TimerThread.run(Timer.java:516)], WAITING pool-14-thread-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING luckperms-scheduler-worker-31: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Craft Scheduler Thread - 59: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.b... (51 KB left)
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] =>    Threads:
                )

        )

    [iterator:protected] => 89
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => ---- Minecraft Crash Report ----
// Ouch. That hurt :(

Time: 2/4/22, 3:40 AM
Description: Exception in server tick loop

java.util.concurrent.CompletionException: java.lang.OutOfMemoryError: Metaspace
	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:315)
	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:320)
	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1159)
	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:482)
	at net.minecraft.server.level.ChunkTaskPriorityQueueSorter.lambda$message$1(ChunkTaskPriorityQueueSorter.java:58)
	at net.minecraft.util.thread.ProcessorMailbox.pollTask(ProcessorMailbox.java:91)
	at net.minecraft.util.thread.ProcessorMailbox.pollUntil(ProcessorMailbox.java:146)
	at net.minecraft.util.thread.ProcessorMailbox.run(ProcessorMailbox.java:102)
	at java.base/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1136)
	at java.base/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635)
	at java.base/java.lang.Thread.run(Thread.java:833)
Caused by: java.lang.OutOfMemoryError: Metaspace
	at java.base/java.lang.ClassLoader.defineClass1(Native Method)
	at java.base/java.lang.ClassLoader.defineClass(ClassLoader.java:1012)
	at java.base/java.security.SecureClassLoader.defineClass(SecureClassLoader.java:150)
	at java.base/java.net.URLClassLoader.defineClass(URLClassLoader.java:524)
	at java.base/java.net.URLClassLoader$1.run(URLClassLoader.java:427)
	at java.base/java.net.URLClassLoader$1.run(URLClassLoader.java:421)
	at java.base/java.security.AccessController.executePrivileged(AccessController.java:807)
	at java.base/java.security.AccessController.doPrivileged(AccessController.java:712)
	at java.base/java.net.URLClassLoader.findClass(URLClassLoader.java:420)
	at java.base/java.lang.ClassLoader.loadClass(ClassLoader.java:587)
	at java.base/java.lang.ClassLoader.loadClass(ClassLoader.java:520)
	at net.minecraft.world.level.levelgen.feature.structures.JigsawPlacement.lambda$addPieces$0(JigsawPlacement.java:329)
	at net.minecraft.world.level.levelgen.feature.structures.WorldGenFeatureDefinedStructureJigsawPlacement$$Lambda$9636/0x0000000801e3bd60.generatePieces(Unknown Source)
	at net.minecraft.world.level.levelgen.feature.StructureFeature.generate(StructureFeature.java:239)
	at net.minecraft.world.level.levelgen.feature.ConfiguredStructureFeature.generate(ConfiguredStructureFeature.java:36)
	at net.minecraft.world.level.chunk.ChunkGenerator.createStructures(ChunkGenerator.java:492)
	at net.minecraft.world.level.chunk.ChunkStatus.lambda$static$2(ChunkStatus.java:51)
	at net.minecraft.world.level.chunk.ChunkStatus$$Lambda$2411/0x000000080124a610.doWork(Unknown Source)
	at net.minecraft.world.level.chunk.ChunkStatus.generate(ChunkStatus.java:273)
	at net.minecraft.server.level.ChunkMap.lambda$scheduleChunkGeneration$35(ChunkMap.java:1226)
	at net.minecraft.server.level.PlayerChunkMap$$Lambda$6414/0x0000000801f62978.apply(Unknown Source)
	at com.mojang.datafixers.util.Either$Left.map(Either.java:38)
	at net.minecraft.server.level.ChunkMap.lambda$scheduleChunkGeneration$37(ChunkMap.java:1224)
	at net.minecraft.server.level.PlayerChunkMap$$Lambda$6412/0x0000000801f624f0.apply(Unknown Source)
	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1150)
	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:482)
	at net.minecraft.server.level.ChunkTaskPriorityQueueSorter.lambda$message$1(ChunkTaskPriorityQueueSorter.java:58)
	at net.minecraft.server.level.ChunkTaskQueueSorter$$Lambda$6321/0x0000000801f45948.run(Unknown Source)
	at net.minecraft.util.thread.ProcessorMailbox.pollTask(ProcessorMailbox.java:91)
	at net.minecraft.util.thread.ProcessorMailbox.pollUntil(ProcessorMailbox.java:146)
	at net.minecraft.util.thread.ProcessorMailbox.run(ProcessorMailbox.java:102)
	at java.base/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1136)


A detailed walkthrough of the error, its code path and all known details is as follows:
---------------------------------------------------------------------------------------

-- System Details --
Details:
	Minecraft Version: 1.18.1
	Minecraft Version ID: 1.18.1
	Operating System: Linux (amd64) version 5.4.0-74-generic
	Java Version: 17.0.1, Oracle Corporation
	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode, sharing), Oracle Corporation
	Memory: 1291523560 bytes (1231 MiB) / 1975517184 bytes (1884 MiB) up to 2411724800 bytes (2300 MiB)
	CPUs: 3
	Processor Vendor: GenuineIntel
	Processor Name: Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz
	Identifier: Intel64 Family 6 Model 45 Stepping 7
	Microarchitecture: Sandy Bridge (Server)
	Frequency (GHz): 2.20
	Number of physical packages: 2
	Number of physical CPUs: 16
	Number of logical CPUs: 32
	Graphics card #0 name: unknown
	Graphics card #0 vendor: unknown
	Graphics card #0 VRAM (MB): 0.00
	Graphics card #0 deviceId: unknown
	Graphics card #0 versionInfo: unknown
	Virtual memory max (MB): 49338.91
	Virtual memory used (MB): 75375.63
	Swap memory total (MB): 1024.00
	Swap memory used (MB): 472.54
	JVM Flags: 3 total; -XX:MaxMetaspaceSize=200M -Xmx2300M -Xms1150M
	CraftBukkit Information:
   Running: Paper version git-Paper-185 (MC: 1.18.1) (Implementing API version 1.18.1-R0.1-SNAPSHOT) false
   Plugins: { Warp v1.1* warp.Warp [Isaiah], SetHome v5.1.2* me.downthepark.sethome.SetHome [], SirBlobmanCore v2.3.4 com.github.sirblobman.api.core.CorePlugin [SirBlobman], Spit v1.2.0 me.funnycube.spit.Main [funnycube], SwearBlock v1.0* me.bukkit.DutchForce.SwearBlock [], EpicTrade v1.8.6 com.jowcey.EpicTrade.base.loader.SpigotLoader [Jowcey], ajAntiXray v1.8.1 us.ajg0702.antixray.Main [ajgeiss0702], ProjectileKnockback v1.9 com.gmail.excel8392.projectileknockback.ProjectileKnockback [], EnderChest vB 2.0* org.thelegitsociety.enderchest.Main [], Multiverse-Core v4.3.1-b861 com.onarandombox.MultiverseCore.MultiverseCore [dumptruckman, Rigby, fernferret, lithium3141, main--], Invs v1.0-SNAPSHOT at.kessapps.invs.Main [KEssApps], UltimateAntiBot v3.3 me.kr1s_d.ultimateantibot.spigot.UltimateAntibotSpigot [Kr1S_D], antiRedstoneClock v1.0.7 com.trafalcraft.antiRedstoneClock.Main [Amosar], PlayerReport v3.4.3 me.PCPSells.PRMain [PCPSells], NoMobLag v2.3.4 com.zenya.nomoblag.NoMobLag [Zenya4], SimpleRTP v2.4 me.sosparkly.SRTP [SoSparkly], CooldownsX v4.1.2 com.github.sirblobman.cooldowns.CooldownPlugin [SirBlobman], MOTD v2.3.7 com.yapzhenyie.motd.Motd [YapZhenYie], ViaVersion v4.1.1 com.viaversion.viaversion.ViaVersionPlugin [_MylesC, creeper123123321, Gerrygames, kennytv, Matsv], SilkTouchHands v1.0.11 com.visualcody.silktouchhands.main [visualcody], Multiverse-Portals v4.2.1-b834 com.onarandombox.MultiversePortals.MultiversePortals [Rigby, fernferret], SmoothTimber v1.19.0 com.syntaxphoenix.spigot.smoothtimber.SmoothTimber [SyntaxPhoenix IT-Solutions], floodgate v2.1.0-SNAPSHOT org.geysermc.floodgate.SpigotPlugin [GeyserMC], ClickTpa v1.5.1* me.jklmao.main.Main [], ViaBackwards v4.1.1 com.viaversion.viabackwards.BukkitPlugin [Matsv, kennytv, Gerrygames, creeper123123321, ForceUpdate1], LuckPerms v5.3.86 me.lucko.luckperms.bukkit.loader.BukkitLoaderPlugin [Luck], TabTPS v1.3.11 xyz.jpenilla.tabtps.spigot.TabTPSPlugin [jmp], ProtocolLib v4.7.0 com.comphenix.protocol.ProtocolLib [dmulloy2, comphenix], SkinsRestorer v14.1.10 net.skinsrestorer.bukkit.SkinsRestorer [Th3Tr0LLeR, McLive, DoNotSpamPls, knat, AlexProgrammerDE], DiscordSRV v1.24.0 github.scarsz.discordsrv.DiscordSRV [Scarsz, Androkai, Vankka], Geyser-Spigot v2.0.0-SNAPSHOT org.geysermc.geyser.platform.spigot.GeyserSpigotPlugin [GeyserMC], LoginSecurity v3.1* com.lenis0012.bukkit.loginsecurity.LoginSecurity [lenis0012], AntiCheatReloaded v1.10.3 com.rammelkast.anticheatreloaded.AntiCheatReloaded [Rammelkast],}
   Warnings: DEFAULT
   Reload Count: 0
   Threads: { WAITING defaultEventLoopGroup-5-2: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Craft Scheduler Thread - 58: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING DiscordSRV - Presence Updater: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.PresenceUpdater.run(PresenceUpdater.java:109)], RUNNABLE Netty Epoll Server IO #1: [io.netty.channel.epoll.Native.epollWait0(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:176), io.netty.channel.epoll.EpollEventLoop.epollWait(EpollEventLoop.java:281), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:351), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Jolokia Agent Cleanup Thread: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.lang.Thread.join(Thread.java:1304), java.base@17.0.1/java.lang.Thread.join(Thread.java:1372), app//org.jolokia.jvmagent.CleanupThread.joinThreads(CleanupThread.java:110), app//org.jolokia.jvmagent.CleanupThread.run(CleanupThread.java:60)], TIMED_WAITING Paper Watchdog Thread: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), org.spigotmc.WatchdogThread.run(WatchdogThread.java:243)], TIMED_WAITING DiscordSRV - Channel Topic Updater: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.ChannelTopicUpdater.run(ChannelTopicUpdater.java:59)], RUNNABLE WebSocketConnectReadThread-116: [java.base@17.0.1/sun.nio.ch.SocketDispatcher.read0(Native Method), java.base@17.0.1/sun.nio.ch.SocketDispatcher.read(SocketDispatcher.java:47), java.base@17.0.1/sun.nio.ch.NioSocketImpl.tryRead(NioSocketImpl.java:261), java.base@17.0.1/sun.nio.ch.NioSocketImpl.implRead(NioSocketImpl.java:312), java.base@17.0.1/sun.nio.ch.NioSocketImpl.read(NioSocketImpl.java:350), java.base@17.0.1/sun.nio.ch.NioSocketImpl$1.read(NioSocketImpl.java:803), java.base@17.0.1/java.net.Socket$SocketInputStream.read(Socket.java:966), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.read(SSLSocketInputRecord.java:478), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.readHeader(SSLSocketInputRecord.java:472), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.bytesInCompletePacket(SSLSocketInputRecord.java:70), java.base@17.0.1/sun.security.ssl.SSLSocketImpl.readApplicationRecord(SSLSocketImpl.java:1455), java.base@17.0.1/sun.security.ssl.SSLSocketImpl$AppInputStream.read(SSLSocketImpl.java:1059), java.base@17.0.1/java.io.InputStream.read(InputStream.java:218), Geyser-Spigot.jar//org.java_websocket.client.WebSocketClient.run(WebSocketClient.java:505), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE Netty Epoll Server IO #3: [io.netty.channel.epoll.Native.epollWait(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:192), io.netty.channel.epoll.Native.epollWait(Native.java:185), io.netty.channel.epoll.EpollEventLoop.epollWaitNoTimerChange(EpollEventLoop.java:290), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:347), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Timer hack thread: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), net.minecraft.SystemUtils$5.run(SystemUtils.java:668)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Craft Async Scheduler Management Thread: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING ExpiringMap-Expirer: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING DiscordSRV - JDA Rate Limit: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1177), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING pool-24-thread-4: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE JolokiaDiscoveryListenerThread-172.20.0.21: [java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.receive0(Native Method), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.receiveIntoNativeBuffer(DatagramChannelImpl.java:750), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.receive(DatagramChannelImpl.java:728), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.trustedBlockingReceive(DatagramChannelImpl.java:666), java.base@17.0.1/sun.nio.ch.DatagramChannelImpl.blockingReceive(DatagramChannelImpl.java:635), java.base@17.0.1/sun.nio.ch.DatagramSocketAdaptor.receive(DatagramSocketAdaptor.java:240), java.base@17.0.1/java.net.DatagramSocket.receive(DatagramSocket.java:700), app//org.jolokia.discovery.MulticastSocketListenerThread.receiveMessage(MulticastSocketListenerThread.java:115), app//org.jolokia.discovery.MulticastSocketListenerThread.run(MulticastSocketListenerThread.java:72)], WAITING Finalizer: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.lang.ref.ReferenceQueue.remove(ReferenceQueue.java:155), java.base@17.0.1/java.lang.ref.ReferenceQueue.remove(ReferenceQueue.java:176), java.base@17.0.1/java.lang.ref.Finalizer$FinalizerThread.run(Finalizer.java:172)], TIMED_WAITING OkHttp ConnectionPool: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.lang.Object.wait(Object.java:472), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.ConnectionPool.lambda$new$0(ConnectionPool.java:66), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.ConnectionPool$$Lambda$7175/0x0000000802234db0.run(Unknown Source), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1136), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING DiscordSRV - JDA Callback 0: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkUntil(LockSupport.java:410), java.base@17.0.1/java.util.concurrent.ForkJoinPool.awaitWork(ForkJoinPool.java:1726), java.base@17.0.1/java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1623), java.base@17.0.1/java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:165)], WAITING pool-30-thread-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE Network Listener - #2: [io.netty.channel.epoll.Native.epollWait(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:192), io.netty.channel.epoll.Native.epollWait(Native.java:185), io.netty.channel.epoll.EpollEventLoop.epollWaitNoTimerChange(EpollEventLoop.java:290), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:347), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE JDA MainWS-ReadThread: [java.base@17.0.1/sun.nio.ch.Net.poll(Native Method), java.base@17.0.1/sun.nio.ch.NioSocketImpl.park(NioSocketImpl.java:181), java.base@17.0.1/sun.nio.ch.NioSocketImpl.timedRead(NioSocketImpl.java:285), java.base@17.0.1/sun.nio.ch.NioSocketImpl.implRead(NioSocketImpl.java:309), java.base@17.0.1/sun.nio.ch.NioSocketImpl.read(NioSocketImpl.java:350), java.base@17.0.1/sun.nio.ch.NioSocketImpl$1.read(NioSocketImpl.java:803), java.base@17.0.1/java.net.Socket$SocketInputStream.read(Socket.java:966), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.read(SSLSocketInputRecord.java:478), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.readHeader(SSLSocketInputRecord.java:472), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.bytesInCompletePacket(SSLSocketInputRecord.java:70), java.base@17.0.1/sun.security.ssl.SSLSocketImpl.readApplicationRecord(SSLSocketImpl.java:1455), java.base@17.0.1/sun.security.ssl.SSLSocketImpl$AppInputStream.read(SSLSocketImpl.java:1059), java.base@17.0.1/java.io.BufferedInputStream.fill(BufferedInputStream.java:244), java.base@17.0.1/java.io.BufferedInputStream.read1(BufferedInputStream.java:284), java.base@17.0.1/java.io.BufferedInputStream.read(BufferedInputStream.java:343), java.base@17.0.1/java.io.FilterInputStream.read(FilterInputStream.java:132), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.WebSocketInputStream.readBytes(WebSocketInputStream.java:165), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.WebSocketInputStream.readFrame(WebSocketInputStream.java:46), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.ReadingThread.readFrame(ReadingThread.java:338), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.ReadingThread.main(ReadingThread.java:99), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.ReadingThread.runMain(ReadingThread.java:64), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.ws.client.WebSocketThread.run(WebSocketThread.java:45)], WAITING Worker-Main-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING pool-27-thread-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING luckperms-scheduler-worker-22: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING pool-24-thread-3: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1177), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING DiscordSRV - Server Watchdog: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.ServerWatchdog.run(ServerWatchdog.java:65)], WAITING Geyser Spigot connection thread-4-4: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE HTTP-Dispatcher: [java.base@17.0.1/sun.nio.ch.EPoll.wait(Native Method), java.base@17.0.1/sun.nio.ch.EPollSelectorImpl.doSelect(EPollSelectorImpl.java:118), java.base@17.0.1/sun.nio.ch.SelectorImpl.lockAndDoSelect(SelectorImpl.java:129), java.base@17.0.1/sun.nio.ch.SelectorImpl.select(SelectorImpl.java:141), platform/jdk.httpserver@17.0.1/sun.net.httpserver.ServerImpl$Dispatcher.run(ServerImpl.java:370), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE DestroyJavaVM: [], WAITING Geyser player thread-3-2: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING MVStore background writer nio:/server/plugins/LuckPerms/luckperms-h2.mv.db: [java.base@17.0.1/java.lang.Object.wait(Native Method), org.h2.mvstore.MVStore$BackgroundWriterThread.run(MVStore.java:3116)], TIMED_WAITING DiscordSRV - Nickname Updater: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.NicknameUpdater.run(NicknameUpdater.java:106)], TIMED_WAITING luckperms-scheduler-worker-30: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE Netty Epoll Server IO #2: [io.netty.channel.epoll.Native.epollWait0(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:176), io.netty.channel.epoll.EpollEventLoop.epollWait(EpollEventLoop.java:281), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:351), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING WebSocketWriteThread-193: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), floodgate-spigot.jar//org.java_websocket.client.WebSocketClient$WebsocketWriteThread.runWriteData(WebSocketClient.java:816), floodgate-spigot.jar//org.java_websocket.client.WebSocketClient$WebsocketWriteThread.run(WebSocketClient.java:799), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING pool-30-thread-3: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Log4j2-AsyncAppenderEventDispatcher-1-Async: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.ArrayBlockingQueue.take(ArrayBlockingQueue.java:420), org.apache.logging.log4j.core.appender.AsyncAppenderEventDispatcher.dispatchAll(AsyncAppenderEventDispatcher.java:71), org.apache.logging.log4j.core.appender.AsyncAppenderEventDispatcher.run(AsyncAppenderEventDispatcher.java:63)], RUNNABLE Server console handler: [java.base@17.0.1/java.io.FileInputStream.read0(Native Method), java.base@17.0.1/java.io.FileInputStream.read(FileInputStream.java:228), org.jline.terminal.impl.AbstractPty$PtyInputStream.read(AbstractPty.java:73), org.jline.utils.NonBlockingInputStream.read(NonBlockingInputStream.java:62), org.jline.utils.NonBlocking$NonBlockingInputStreamReader.read(NonBlocking.java:168), org.jline.utils.NonBlockingReader.read(NonBlockingReader.java:57), org.jline.keymap.BindingReader.readCharacter(BindingReader.java:160), org.jline.keymap.BindingReader.readBinding(BindingReader.java:110), org.jline.keymap.BindingReader.readBinding(BindingReader.java:61), org.jline.reader.impl.LineReaderImpl.doReadBinding(LineReaderImpl.java:923), org.jline.reader.impl.LineReaderImpl.readBinding(LineReaderImpl.java:956), org.jline.reader.impl.LineReaderImpl.readLine(LineReaderImpl.java:651), org.jline.reader.impl.LineReaderImpl.readLine(LineReaderImpl.java:468), net.minecrell.terminalconsole.SimpleTerminalConsole.readCommands(SimpleTerminalConsole.java:158), net.minecrell.terminalconsole.SimpleTerminalConsole.start(SimpleTerminalConsole.java:141), net.minecraft.server.dedicated.DedicatedServer$1.run(DedicatedServer.java:111)], TIMED_WAITING DiscordSRV - Console Message Queue Worker: [java.base@17.0.1/java.lang.Thread.sleep(Native Method), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.objects.threads.ConsoleMessageQueueWorker.run(ConsoleMessageQueueWorker.java:104)], TIMED_WAITING Craft Scheduler Thread - 57: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Paper RegionFile IO Thread: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:211), com.destroystokyo.paper.io.QueueExecutorThread.run(QueueExecutorThread.java:97)], TIMED_WAITING ForkJoinPool.commonPool-worker-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkUntil(LockSupport.java:410), java.base@17.0.1/java.util.concurrent.ForkJoinPool.awaitWork(ForkJoinPool.java:1726), java.base@17.0.1/java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1623), java.base@17.0.1/java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:165)], TIMED_WAITING luckperms-scheduler-worker-29: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING ForkJoinPool.commonPool-worker-2: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.ForkJoinPool.awaitWork(ForkJoinPool.java:1724), java.base@17.0.1/java.util.concurrent.ForkJoinPool.runWorker(ForkJoinPool.java:1623), java.base@17.0.1/java.util.concurrent.ForkJoinWorkerThread.run(ForkJoinWorkerThread.java:165)], RUNNABLE Network Listener - #3: [io.netty.channel.epoll.Native.epollWait(Native Method), io.netty.channel.epoll.Native.epollWait(Native.java:192), io.netty.channel.epoll.Native.epollWait(Native.java:185), io.netty.channel.epoll.EpollEventLoop.epollWaitNoTimerChange(EpollEventLoop.java:290), io.netty.channel.epoll.EpollEventLoop.run(EpollEventLoop.java:347), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Craft Scheduler Thread - 46: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], RUNNABLE OkHttp discord.com: [java.base@17.0.1/sun.nio.ch.Net.poll(Native Method), java.base@17.0.1/sun.nio.ch.NioSocketImpl.park(NioSocketImpl.java:181), java.base@17.0.1/sun.nio.ch.NioSocketImpl.park(NioSocketImpl.java:190), java.base@17.0.1/sun.nio.ch.NioSocketImpl.implRead(NioSocketImpl.java:314), java.base@17.0.1/sun.nio.ch.NioSocketImpl.read(NioSocketImpl.java:350), java.base@17.0.1/sun.nio.ch.NioSocketImpl$1.read(NioSocketImpl.java:803), java.base@17.0.1/java.net.Socket$SocketInputStream.read(Socket.java:966), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.read(SSLSocketInputRecord.java:478), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.readHeader(SSLSocketInputRecord.java:472), java.base@17.0.1/sun.security.ssl.SSLSocketInputRecord.bytesInCompletePacket(SSLSocketInputRecord.java:70), java.base@17.0.1/sun.security.ssl.SSLSocketImpl.readApplicationRecord(SSLSocketImpl.java:1455), java.base@17.0.1/sun.security.ssl.SSLSocketImpl$AppInputStream.read(SSLSocketImpl.java:1059), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.Okio$2.read(Okio.java:140), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.AsyncTimeout$2.read(AsyncTimeout.java:237), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.RealBufferedSource.request(RealBufferedSource.java:72), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okio.RealBufferedSource.require(RealBufferedSource.java:65), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.internal.http2.Http2Reader.nextFrame(Http2Reader.java:95), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.internal.http2.Http2Connection$ReaderRunnable.execute(Http2Connection.java:608), DiscordSRV-Build-1.24.0.jar//github.scarsz.discordsrv.dependencies.okhttp3.internal.NamedRunnable.run(NamedRunnable.java:32), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], WAITING Geyser Spigot connection thread-4-3: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), io.netty.util.concurrent.SingleThreadEventExecutor.takeTask(SingleThreadEventExecutor.java:243), io.netty.channel.DefaultEventLoop.run(DefaultEventLoop.java:52), io.netty.util.concurrent.SingleThreadEventExecutor$4.run(SingleThreadEventExecutor.java:986), io.netty.util.internal.ThreadExecutorMap$2.run(ThreadExecutorMap.java:74), io.netty.util.concurrent.FastThreadLocalRunnable.run(FastThreadLocalRunnable.java:30), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING bStats-Metrics: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.awaitNanos(AbstractQueuedSynchronizer.java:1672), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:1182), java.base@17.0.1/java.util.concurrent.ScheduledThreadPoolExecutor$DelayedWorkQueue.take(ScheduledThreadPoolExecutor.java:899), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING server-timer: [java.base@17.0.1/java.lang.Object.wait(Native Method), java.base@17.0.1/java.util.TimerThread.mainLoop(Timer.java:563), java.base@17.0.1/java.util.TimerThread.run(Timer.java:516)], WAITING pool-14-thread-1: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.park(LockSupport.java:341), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionNode.block(AbstractQueuedSynchronizer.java:506), java.base@17.0.1/java.util.concurrent.ForkJoinPool.unmanagedBlock(ForkJoinPool.java:3463), java.base@17.0.1/java.util.concurrent.ForkJoinPool.managedBlock(ForkJoinPool.java:3434), java.base@17.0.1/java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:1623), java.base@17.0.1/java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:435), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1062), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING luckperms-scheduler-worker-31: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.base@17.0.1/java.util.concurrent.locks.LockSupport.parkNanos(LockSupport.java:252), java.base@17.0.1/java.util.concurrent.SynchronousQueue$TransferStack.transfer(SynchronousQueue.java:401), java.base@17.0.1/java.util.concurrent.SynchronousQueue.poll(SynchronousQueue.java:903), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1061), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1122), java.base@17.0.1/java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:635), java.base@17.0.1/java.lang.Thread.run(Thread.java:833)], TIMED_WAITING Craft Scheduler Thread - 59: [java.base@17.0.1/jdk.internal.misc.Unsafe.park(Native Method), java.b... (51 KB left)
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	Minecraft Version: 1.18.1
                                            [number:protected] => 59
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => 	Minecraft Version:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.18.1
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.18.1", $analysis[0]->getMessage());

    }
}