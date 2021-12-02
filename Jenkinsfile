pipeline {
	agent none
	stages {
		stage('Checkout SCM') {
			steps {
				git 'https://github.com/brandonneo/jenkins-php-selenium-test.git'
			}
		}
		stage('Integration UI Test') {
				stage('Deploy') {
					agent any
				}

				stage('Headless Browser Test') {
					agent {
						docker {
							image 'maven:3-alpine'
							args '-v /root/.m2:/root/.m2'
						}
					}
					steps {
						sh 'mvn -B -DskipTests clean package'
						sh 'mvn test'
					}
					post {
						always {
							junit 'target/surefire-reports/*.xml'
						}
					}
				}
		}
	}
}
