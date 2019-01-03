#!/usr/bin/env groovy

pipeline {
    agent any

    environment {
        script_url='/www/scripts'
    }
    stages {
        stage('Build') {
            steps {
                echo '开始制作镜像'
                sh "${script_url}/php_client_build.sh"
            }
        }
        stage('Push image') {
            steps {
                echo '推送镜像'
               sh "${script_url}/push_image.sh"
            }
        }
        stage('deploy') {
            steps {
                echo '部署'
            }
        }
    }

    post {
        success {
           echo '构建完成'
        }
    }
}
