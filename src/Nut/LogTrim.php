<?php

namespace Bolt\Nut;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LogTrim extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('log:trim')
            ->setDescription('Trim the activitylog to recent/important items only.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->app['logger.manager']->trim('system');
        $this->app['logger.manager']->trim('change');

        $output->writeln("<info>Activity logs trimmed!</info>");
    }
}
