--
-- Add fields to Event Table
--
ALTER TABLE `event`ADD `task_idfs` int(11)  NOT NULL DEFAULT '0' AFTER `calendar_idfs`,
ADD `task_done` tinyint(1) NOT NULL AFTER `task_idfs`;

