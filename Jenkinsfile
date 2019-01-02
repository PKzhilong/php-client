#!/usr/bin/env groovy

pipeline {
    agent any

    stages {
        stage('Clean up') {
            steps {
                echo '清理以构建的镜像'
                sh 'docker image rm hasichenglouzhu/php-client'
            }
        }
        stage('Build') {
            steps {
                echo '开始制作镜像'
                sh 'docker build -t haichenglouzhu/php-client:latest ./'
            }
        }
    }

    post {
        success {
           echo '推送镜像'
           sh 'docker push haichenglouzhu/php-client'
        }
    }
}