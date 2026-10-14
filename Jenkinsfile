pipeline {

    agent {
        docker {
            image 'eclipse-temurin:21-jdk'
        }
    }

    stages {

        stage('Build') {

            steps {

                git branch: 'main',
                    url: 'https://github.com/fw17896/Hello.git'

                sh 'javac Hello.java'

                sh 'java HelloWorld'

            }

        }

    }

}
